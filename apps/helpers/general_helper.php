<?php 
    if (!defined('BASEPATH')) exit('No direct script access allowed');

    if (!function_exists('base_urls')) {
    	function base_urls($uri = '') {
            $trans = array(
                'http://' => 'http://'
            );

            return strtr('http://' . $_SERVER['HTTP_HOST'] . "/" . $uri, $trans);
    	}
    }

    if (!function_exists('see')) 
    {
        function see($var)
        {
            if((defined('ENVIRONMENT') && ENVIRONMENT == 'development'))
            {
                echo '<pre>';
                print_r($var);
                echo '</pre>';   
            }
        }
    }

    if (!function_exists('css')){
        function css($var){
            echo base_url('assets/css/'.$var);
        }
    }

    if (!function_exists('js')){
        function js($var){
            echo base_url('assets/js/'.$var);
        }
    }

    if (!function_exists('img')){
        function img($var){
            echo base_url('assets/img/'.$var);
        }
    }

    if (!function_exists('cetak')) 
    {
        function cetak($var)
        {
            if((defined('ENVIRONMENT') && ENVIRONMENT == 'development'))
            {
                echo $var."</br>";
            }
        }
    }

    if (!function_exists('mati')) 
    {
        function mati($var = '')
        {
            if((defined('ENVIRONMENT') && ENVIRONMENT == 'development'))
            {
                die($var);
            }
        }
    }

    if (!function_exists('generate_random')) 
    {
        function generate_random($length = 3)
        {
            $charset = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    		$randStringLen = $length;

    		$randString = "";
    		for ($i = 0; $i < $randStringLen; $i++) {
    			$randString .= $charset[mt_rand(0, strlen($charset) - 1)];
    		}

    		return $randString;
        }
    }

    if (!function_exists('force_ssl')) 
    {
        function force_ssl() {
            if (!isset($_SERVER['HTTPS']) || $_SERVER['HTTPS'] != "on") {
                $url = "https://". $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
                redirect($url);
                exit;
            }
        }
    }
?>