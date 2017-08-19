<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/** DIGIMASTER About Us Page CONFIG **/
$config['digimaster_about_page_priority']	=	array(
														'About Us'		=>	'MANUAL',
													  	'Vision'		=>	'AUTO',
													 	'Mission'		=>	'AUTO', 
													  	'Core Value' 	=>	'AUTO',
												);	

$config['digimaster_about_page_bootstrap']	=	array(
														'AUTO' 			=>	array('col-lg-', 'col-md-', 'col-sm-'),
														'MANUAL'		=>	array('col-md-12')
												);

/** DIGIMASTER PAGINATION CONFIG **/
$config['number_per_page']					=	2;

/** Show By Page CONFIG **/
$config['show_page']						=	array(2,4,6,10);

/** DIGIMASTER sort **/
$config['sort_by']							=	array(
													'Date' => 'digimaster_main_created_on',
													'Name' => 'digimaster_main_name'
												);

$config['default_sort']						=	'digimaster_main_created_on';

$config['sort_keys']						=	array(
													'digimaster_main_created_on' => 'DESC',
													'digimaster_main_name' 	=> 'ASC'
												);