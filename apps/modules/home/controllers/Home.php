<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Home extends MY_General {
		public function __construct()
	    {
	        parent::__construct();
	        $this->load->model('Digimaster_model');
	    }

		public function index()
		{

			// Get Footer Social Media
			$this->data['social_media'] 	=	$this->Digimaster_model->where(array('digimaster_footer_type' => 'social media', 'digimaster_footer_status' => 'Y'))->digimaster__footer_content_all();

			// Get Footer Except Social Media
			$this->data['except_social_media']	=	$this->Digimaster_model->where(array('digimaster_footer_type !=' => 'social media', 'digimaster_footer_status' => 'Y'))->digimaster__footer_content_all();
			$this->data['number_of_rows'] =	$this->Digimaster_model->where(array('digimaster_footer_type !=' => 'social media', 'digimaster_footer_status' => 'Y'))->digimaster__footer_content_count();

			$this->load->view('main', $this->data);
		}
	}
?>