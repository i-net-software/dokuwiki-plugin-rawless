<?php
/**
 * DokuWiki Plugin rawless (Action Component)
 *
 * @license GPL 2 http://www.gnu.org/licenses/gpl-2.0.html
 * @author  Gerry Weißbach / i-net /// software <tools@inetsoftware.de>
 */

// must be run within Dokuwiki
if(!defined('DOKU_INC')) die();

class action_plugin_rawless extends DokuWiki_Action_Plugin {

    /**
     * Registers a callback function for a given event
     *
     * @param Doku_Event_Handler $controller DokuWiki's event controller object
     * @return void
     */
    public function register(Doku_Event_Handler $controller) {
        if ( strrpos( $_SERVER['SCRIPT_FILENAME'], 'css.php', -7 ) ) {
            $controller->register_hook('INIT_LANG_LOAD', 'BEFORE', $this, 'handle_lang_load');
        }
    }

    /**
     * [Custom event handler which performs action]
     *
     * @param Doku_Event $event  event object by reference
     * @param mixed      $param  [the parameters passed as fifth argument to register_hook() when this
     *                           handler was registered]
     * @return void
     */
    public function handle_lang_load(Doku_Event &$event, $param) {
        global $INPUT;

        if ( $INPUT->has('rawless') ) {
            spl_autoload_register(function($class){
                if ( $class == 'lessc' ) {
                    include 'lessc.inc.php';
                }
            }, true, true);
        }
    }

}

// vim:ts=4:sw=4:et:
