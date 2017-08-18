<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Digimaster_model extends CI_Model {

		public function __construct(){
			parent::__construct();
			$this->load->database('default', TRUE);
		}

		public function select($select = ''){
			if($select != '') $this->db->select($select);
			return $this;
		}

		public function start_trans_begin(){
			return $this->db->trans_begin();
		}

		public function orderBy($field, $direction = 'asc') {
			$this->db->order_by($field, $direction);
			return $this;
		}

		public function start_trans_status(){
			return $this->db->trans_status();
		}

		public function start_trans_rollback(){
			return $this->db->trans_rollback();
		}

		public function start_trans_commit(){
			return $this->db->trans_commit();
		}

		public function insertBatch($mytable, $arr){
		 	return $this->db->insert_batch($mytable, $arr); 
			// see($this->db->last_query());
		}

		public function last_quer(){
			return $this->db->last_query();
		}

		public function manual_query($query){
			return $this->db->query($query);
		}

		public function where($where = '') {
			if($where != '') $this->db->where($where);
			return $this;
		}

		public function orWhere($orwhere = ''){
			if($orwhere != '')	$this->db->or_where($orwhere);
			return $this;
		}
		
		public function whereNotIn($field = '', $condition = ''){
			if($field != '' && $condition != '') $this->db->where_not_in($field, $condition);
			return $this;
		}

		public function whereIn($field = '', $condition = ''){
			if($field != '' && $condition != '') $this->db->where_in($field, $condition);
			return $this;
		}

		public function from($name_fields = ''){
			return $this->db->from($name_fields);
		}

		public function join($name_fields = '', $key_relations = ''){
			return $this->db->join($name_fields, $key_relations);
		}

		public function get(){
			return $this->db->get();
		}
		
		public function setLimit($limit, $start = 0) {
	    	$this->db->limit($limit, $start);
	        return $this;
	    }

	    // Get Content Footer
	    public function digimaster__footer_content_all(){
	    	return $this->db->get('digimaster__footer_content')->result_array();
	    }

	    public function digimaster__footer_content_count(){
	    	return $this->db->get('digimaster__footer_content')->num_rows();
	    }

	    // Get Content Header
	    public function digimaster__header_content_all(){
	    	return $this->db->get('digimaster__header_content')->result_array();
	    }

	    public function digimaster__header_content_single(){
	    	return $this->db->get('digimaster__header_content')->row_array();
	    }

	    public function digimaster__header_content_count(){
	    	return $this->db->get('digimaster__header_content')->num_rows();
	    }

	    // Get Banner
	    public function digimaster__banner_all(){
	    	return $this->db->get('digimaster__banner')->result_array();
	    }

	    // Get Subject
	    public function digimaster__master_subject_all(){
	    	return $this->db->get('digimaster__master_subject')->result_array();
	    }

	    // Get Main Content
	    public function digimaster__main_content_all(){
	    	return $this->db->get('digimaster__main_content')->result_array();
	    }

	    // Get About Content
	    public function digimaster__about_content_all(){
	    	return $this->db->get('digimaster__about_content')->result_array();
	    }

	}