<?php
    namespace Logicals;
    
    class HomeLogic {
    	private $_CI;
    	public function __construct()
        {
        	$this->_CI =& get_instance();
        }
    }
?>