<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class model_requests extends CI_Model {

    function get_data($data){
    	$this->db->select('*');
	$this->db->from('directory');
    	$this->db->like('name', $data['letter'], 'after');
        $this->db->order_by("name", "asc"); 
    	$query = $this->db->get();

    	if ($query->num_rows() > 0){
            return $query->result_array(); 
    	}else{
            return false;
    	}
    }
    
    function get_data_by_id($data){
    	$this->db->select('*');
	$this->db->from('directory');
    	$this->db->where('id', $data['id']); 
    	$query = $this->db->get();

    	if ($query->num_rows() > 0){
            return $query->result_array(); 
    	}else{
            return false;
    	}
    }
    
    function get_data_by_code($search_code){
    	$this->db->select('*');
	$this->db->from('directory');
    	$this->db->where('code', $search_code); 
    	$query = $this->db->get();

    	if ($query->num_rows() > 0){
            return $query->result_array(); 
    	}else{
            return false;
    	}
    }
    
    function check_user($data){
        $this->db->select('*');
	$this->db->from('administrators');
        $conditions = array('username' => $data['un'], 'password' => $data['pw']);
    	$this->db->where($conditions); 
        $query = $this->db->get();

    	if ($query->num_rows() > 0){
            return $query->row(); 
    	}else{
            return false;
    	}
    }

}