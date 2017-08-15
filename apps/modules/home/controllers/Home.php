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
			$this->load->view('header', $this->data);
			$this->load->view('footer', $this->data);
		}

		public function contact(){
			$this->load->view('header', $this->data);
			$this->load->view('footer', $this->data);
		}


	}
?>