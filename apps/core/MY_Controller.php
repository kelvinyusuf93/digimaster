<?php 
	if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class MY_Controller extends MX_Controller {
		public $data;
		public function __construct(){
			parent::__construct();
			
		}
	}

	class MY_General extends MY_Controller{
		function __construct()
		{

			$this->load->model('Digimaster_model');

			// Get Header Logo
			$this->data['logo'] 			=	$this->Digimaster_model->where(array('digimaster_header_type' => 'logo', 'digimaster_header_status' => 'Y'))->digimaster__header_content_single();

			// Get Header Favicon
			$this->data['favicon'] 			=	$this->Digimaster_model->where(array('digimaster_header_type' => 'favicon', 'digimaster_header_status' => 'Y'))->digimaster__header_content_single();

			// Get Header Menu
			$this->data['menu'] 			=	$this->Digimaster_model->where(array('digimaster_header_type' => 'menu', 'digimaster_header_status' => 'Y'))->digimaster__header_content_all();

			// Get Header Title
			$this->data['title'] 			=	$this->Digimaster_model->where(array('digimaster_header_type' => 'title', 'digimaster_header_status' => 'Y'))->digimaster__header_content_single();

			// Menu Active
			$this->data['active_segment']	=	$this->uri->segment(1);

			// Get Footer Social Media
			$this->data['social_media'] 	=	$this->Digimaster_model->where(array('digimaster_footer_type' => 'social media', 'digimaster_footer_status' => 'Y'))->digimaster__footer_content_all();

			// Get Footer Except Social Media
			$this->data['except_social_media']	=	$this->Digimaster_model->where(array('digimaster_footer_type !=' => 'social media', 'digimaster_footer_status' => 'Y'))->digimaster__footer_content_all();
			$this->data['number_of_rows'] =	$this->Digimaster_model->where(array('digimaster_footer_type !=' => 'social media', 'digimaster_footer_status' => 'Y'))->digimaster__footer_content_count();
		}
	}

	/* End of file My_Controller.php */
	/* Location: ./application/core/MY_Controller.php */
?>

