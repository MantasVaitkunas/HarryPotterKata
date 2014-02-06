<?php
spl_autoload_register(function($sClass) {
    $sPath = realpath(__DIR__). '/'. str_replace('_', '/', $sClass) . '.php';
    include_once $sPath;
});