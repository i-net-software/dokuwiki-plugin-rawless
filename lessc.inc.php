<?php

/**
 * Overide lessc - class.
 */
class lessc {

    /** @var  string|string[] */
	public $importDir;

    public function compile($css) {
        return $css;
    }
    
    public function setPreserveComments( $preserve ) {
        return $preserve;
    }

}

