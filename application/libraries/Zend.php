<?php
class CI_Zend{
    public function __construct ()
    {
        ini_set('include_path', ini_get('include_path') . PATH_SEPARATOR . APPPATH . 'libraries');
    }
    
    public function load ($class)
    {
        require_once (string) $class . '.php';
    }
}