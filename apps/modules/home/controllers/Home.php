<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Home extends MY_General {
		public function __construct()
	    {
	        parent::__construct();
	        $this->load->model('Digimaster_model');
	        $this->load->library('pagination');
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

		public function about(){
			// Load Banner
			$this->data['banner'] 	=	$this->Digimaster_model->where(array('digimaster_banner_status' => 'Y'))->digimaster__banner_all();

			// Load About Content
			$setting_config 		=	$this->config->item('digimaster_about_page_priority');
			$class_config 			=	$this->config->item('digimaster_about_page_bootstrap');

			$get_about 				=	$this->Digimaster_model->where(array('digimaster_about_status' => 'Y'))->setLimit('4')->orderBy('digimaster_about_id', 'DESC')->groupBy('digimaster_about_type')->digimaster__about_content_all();

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

		public function all_subject(){
			// Showing Page
			if(is_int((int)$this->input->get('show')) && $this->input->get('show') > 0){
				$showing_page 	=	$this->input->get('show');
			}else{
				$showing_page 	=	$this->config->item('number_per_page');
			}

			// Sort By Page
			$this->data['show_page']	=	$this->config->item('show_page');
			$this->data['sort_by']		=	$this->config->item('sort_by');

			// Initialize Pagination
			$total_rows 			= $this->Digimaster_model->where(array('digimaster_main_status' => 'Y'))->digimaster__main_content_count();

			$config['base_url'] 	=	base_url('all-subject');
			$config['total_rows'] 	=	$total_rows;
			$config['per_page'] 	=	$showing_page;
			$config['page_query_string'] 	=	TRUE;
			$config['use_page_numbers'] 	=	TRUE;
			$config['reuse_query_string'] 	=	TRUE;
			$config['query_string_segment'] =  'page';

			$config['next_tag_open'] 		= 	'<li>';
			$config['next_tag_close'] 		= 	'</li>';

			$config['prev_tag_open']		=	'<li>';
			$config['prev_tag_close']		=	'</li>';

			$config['cur_tag_open']			=	'<li><a href="#">';
			$config['cur_tag_close']		=	'</a></li>';

			$config['num_tag_open']			=	'<li>';
			$config['num_tag_close']		=	'</li>';

			$this->pagination->initialize($config);


			$this->data['paging']			=	$this->pagination->create_links();


			// Get Master Subject
			$this->data['ms_subject']	=	$this->Digimaster_model->where(array('digimaster_subject_status' => 'Y'))->digimaster__master_subject_all();

			// Get Main Content
			$limitation_page 				=	$this->input->get('page') > 0 ? $this->input->get('page') : 0;
			$limitation_page 				=	$limitation_page > 0 ? $limitation_page-1 : $limitation_page;
			$set_limit 						=	$showing_page * $limitation_page;

			$sorting_key 					=	$this->input->get('sorting') != '' ? $this->config->item('sort_by')[$this->input->get('sorting')] : $this->config->item('default_sort');

			$sorting_value 					=	$this->config->item('sort_keys')[$sorting_key];

			$this->data['main_content'] 	=	$this->Digimaster_model->where(array('digimaster_main_status' => 'Y'))->setLimit($showing_page, $set_limit)->orderBy($sorting_key, $sorting_value)->digimaster__main_content_all();

			$this->load->view('header', $this->data);
			$this->load->view('all_subject', $this->data);
			$this->load->view('footer', $this->data);
		}

		public function detail($slug_segment){
			$verified_slug 		=	$this->Digimaster_model->where(array('digimaster_main_slug' => $slug_segment))->digimaster__main_content_count();

			if($verified_slug){
				// Single Courses Detail
				$this->data['detail_courses'] 	=	$this->Digimaster_model->where(array('digimaster_main_slug' => $slug_segment))->digimaster__main_content_single();

				// Course Id
				$course_id 						=	$this->data['detail_courses']['digimaster_main_id'];

				// Get Other Course
				$this->data['other_courses']	=	$this->Digimaster_model->where(array('digimaster_main_slug !=' => $slug_segment))->setLimit(4)->orderBy('digimaster_main_created_on', 'DESC')->digimaster__main_content_all();

				// Get Detail Course
				$this->data['detail_course_desc'] 	=	$this->Digimaster_model->where(array('digimaster_main_content_id' => $course_id, 'digimaster_main_detail_status' => 'Y'))->digimaster__main_detail_single();

				// Get Detail Date
				$this->data['detail_course_schedule_date']	=	$this->Digimaster_model->where(array('digimaster_main_content_id' => $course_id, 'digimaster_main_schedule_status' => 'Y'))->digimaster__main_schedule_all();

				$this->load->view('header', $this->data);
				$this->load->view('main_detail', $this->data);
				$this->load->view('footer', $this->data);
			}else{
				redirect('','AUTO',301);
			}

		}

		public function search(){
			// Sort By Page
			$this->data['show_page']	=	$this->config->item('show_page');
			$this->data['sort_by']		=	$this->config->item('sort_by');

			$keywords 	=	$this->input->get('q');
			if($keywords == ''){
				redirect('', 'AUTO', 301);
			}

			$split_keywords 			=	explode(" ", $keywords);
			$query_builder_count 		=	"SELECT COUNT('digimaster_main_id') as total_search FROM digimaster__main_content WHERE digimaster_main_name LIKE '%${keywords}%' OR (";
			$query_builder_data 		=	"SELECT * FROM digimaster__main_content WHERE digimaster_main_name LIKE '%${keywords}%' OR (";

			$total_keywords 			=	sizeof($split_keywords);
			$temp_query					=	"";
			for($i = 0; $i < $total_keywords; $i++){
				$temp_query 	.=	"digimaster_main_name LIKE '%{$split_keywords[$i]}%' AND ";
			}

			//rtrim query builder DATA
			$temp_query 		=	rtrim($temp_query, "AND ");
			$temp_query			.=	")";

			$query_builder_data .= $temp_query;
			$query_builder_count .= $temp_query;

			$result_count 				=	$this->db->query($query_builder_count)->row_array();
			if($result_count['total_search'] == 0){
				$this->data['result_search'] 	=	"Course Not Found.";
				$this->data['result']			=	array();
			}else{
				$this->data['result_search']	=	$result_count['total_search']." data found";

				// Showing Page
				if(is_int((int)$this->input->get('show')) && $this->input->get('show') > 0){
					$showing_page 	=	$this->input->get('show');
				}else{
					$showing_page 	=	$this->config->item('number_per_page');
				}

				$config['base_url'] 	=	base_url('search');
				$config['total_rows'] 	=	$result_count['total_search'];
				$config['per_page'] 	=	$showing_page;
				$config['page_query_string'] 	=	TRUE;
				$config['use_page_numbers'] 	=	FALSE;
				$config['reuse_query_string'] 	=	TRUE;
				$config['query_string_segment'] =  	'page';
				$config['next_tag_open'] 		= 	'<li>';
				$config['next_tag_close'] 		= 	'</li>';

				$config['prev_tag_open']		=	'<li>';
				$config['prev_tag_close']		=	'</li>';

				$config['cur_tag_open']			=	'<li><a href="#">';
				$config['cur_tag_close']		=	'</a></li>';

				$config['num_tag_open']			=	'<li>';
				$config['num_tag_close']		=	'</li>';

				$this->pagination->initialize($config);

				$this->data['paging']	=	$this->pagination->create_links();

				// Get Main Content
				$limitation_page 				=	$showing_page > 0 ? $this->input->get('page') : 0;
				$limitation_page 				=	$limitation_page > 0 ? $limitation_page-1 : $limitation_page;
				$set_limit 						=	$showing_page * $limitation_page;

				$sorting_key 					=	$this->input->get('sorting') != '' ? $this->config->item('sort_by')[$this->input->get('sorting')] : $this->config->item('default_sort');
				$sorting_value 					=	$this->config->item('sort_keys')[$sorting_key];

				$query_builder_data 	.= " ORDER BY {$sorting_key} {$sorting_value}";
				$query_builder_data 	.= " LIMIT {$set_limit}, {$showing_page}";

				$result_execute 		=	$this->Digimaster_model->manual_query($query_builder_data)->result_array();
				$this->data['result']	=	$result_execute;
			}

			

			$this->load->view('header', $this->data);
			$this->load->view('search', $this->data);
			$this->load->view('footer', $this->data);

		}

	}
?>