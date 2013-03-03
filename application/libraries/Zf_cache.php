<?php
class Zf_cache {
    
    public $lifetime = 1;
    public $enabled = TRUE;
    public $automatic_serialization = TRUE;
    private $_ci;
    private $_cache;
    
    function __construct($options = array()) {
        $this->_ci =& get_instance();
        
        $this->_ci->load->library('zend');
        $this->_ci->zend->load('Zend/Cache');
        
        !isset($options['lifetime']) || $this->lifetime = $options['lifetime'];
        !isset($options['enabled']) || $this->enabled = $options['enabled'];
        !isset($options['automatic_serialization']) || $this->automatic_serialization = $options['automatic_serialization'];
        
        $this->_cache = Zend_Cache::factory('Core', 'File', array(
            'caching' => $this->enabled,
            'lifetime' => $this->lifetime,
            'automatic_serialization' => $this->automatic_serialization
        ), array(
            'cache_dir' => APPPATH . 'cache'
        ));
    }
    
    public function get_instance ()
    {
        return $this->_cache;
    }
}