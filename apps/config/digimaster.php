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