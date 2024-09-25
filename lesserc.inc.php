<?php

namespace LesserPHP;

/**
 * Overide lessc - class.
 */
class Lessc {

    /** @var  string|string[] */
	public $importDir;

    public function compile(string $string, ?string $name = null): string
    {
        return $string;
    }

    public function setImportDir($dirs): void {
        $this->importDir = (array)$dirs;
    }

    public function setPreserveComments(bool $preserve): void {}
}
