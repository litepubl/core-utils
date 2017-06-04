<?php

namespace LitePubl\Core\Utils;

class GlobalVars
{
    private $vars = [];

    public function push()
    {
        $this->vars[] = [
        '_POST' => $_POST,
        '_GET' => $_GET,
        '_COOKIE' => $_COOKIE,
        '_SERVER' => $_SERVER,
        '_FILES' => $_FILES,
        '_GLOBALS' => $_GLOBALS,
        ];
    }

    public function pop()
    {
        $a = array_pop($this->vars);
        $_GLOBALS = $a['_GLOBALS'];
        $_POST = $a['_POST'];
        $_GET = $a['_GET'];
        $_COOKIE = $a['_COOKIE'];
        $_SERVER = $a['_SERVER'];
        $_FILES = $A['_FILES'];
    }
}
