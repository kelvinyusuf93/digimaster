<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Home extends MY_General {
		public function __construct()
	    {
	        parent::__construct();
	        $this->load->model('Digimaster_model');
	    }

	    public function error_404(){
	    	redirect('','AUTO',301);
	    }

		public function index()
		{

			// Get Main Content
			$this->data['main_content'] 	=	$this->Digimaster_model->where(array('digimaster_main_status' => 'Y'))->setLimit(4)->orderBy('digimaster_main_created_on','desc')->digimaster__main_content_all();

			// Get Master Subject
			$this->data['ms_subject']	=	$this->Digimaster_model->where(array('digimaster_subject_status' => 'Y'))->digimaster__master_subject_all();

			// Load Banner
			$this->data['banner'] 	=	$this->Digimaster_model->where(array('digimaster_banner_status' => 'Y'))->digimaster__banner_all();

			$this->load->view('main', $this->data);
		}

		public function services(){
			$this->load->view('header', $this->data);
			$this->load->view('footer', $this->data);
		}

		public function about(){
			// Load Banner
			$this->data['banner'] 	=	$this->Digimaster_model->where(array('digimaster_banner_status' => 'Y'))->digimaster__banner_all();

			// Load About Content
			$setting_config 		=	$this->config->item('digimaster_about_page_priority');
			$class_config 			=	$this->config->item('digimaster_about_page_bootstrap');

			$get_about 				=	$this->Digimaster_model->where(array('digimaster_about_status' => 'Y'))->setLimit('4')->orderBy('digimaster_about_id', 'DESC')->digimaster__about_content_all();

			$about 					=	array();

			// Create for priority
			$priority 				=	function(&$about, $keys, $content = array(), $mode){
											$counter = 0;
											foreach($about as $a){
												$counter = @$a['digimaster_about_type'] === $keys ? $counter++ : $counter;
											}

											if($counter === 0){
												$content['mode'] 	=	$mode;
												$about[] 			=	$content;
											}
										};

			// Create Class
			$class 					=	function(&$about, $class_config){
											$count_auto   	   =	0;
											$bootstrap_default = 	12;
											foreach($about as $keys => $c){
												if($c['mode'] === 'AUTO') $count_auto++;
												$about[$keys]['class'] 	=	''; 
											}
											
											$avoid_T_PAAMAYIM_NEKUDOTAYIM = $bootstrap_default/$count_auto;

											foreach($about as $keys => $c){
												foreach($class_config[$c['mode']] as $cc){
													$about[$keys]['class'] .= substr($cc, -1) === '-' ? "{$cc}{$avoid_T_PAAMAYIM_NEKUDOTAYIM} " : "{$cc} ";
												}
											}
										};

			// Initialize Setting Config
			if(!empty($setting_config)){
				// Inject Priority
				foreach($setting_config as $keys => $sc){
					// Order By Priority
					foreach($get_about as $ga){
						if($ga['digimaster_about_type'] === $keys){
							$priority($about, $keys, $ga, $sc);
							break;		
						}
					}
				}
			}

			// Initialize Class Bootstrap
			$class($about, $class_config);
			
			$this->data['about_content']	=	$about;

			$this->load->view('header', $this->data);
			$this->load->view('about', $this->data);
			$this->load->view('footer', $this->data);
		}

		public function contact(){
			$this->load->view('header', $this->data);
			$this->load->view('footer', $this->data);
		}


	}
?>