<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class model_inputs extends CI_Model {

    function submit_data($data){
    	$this->db->insert('directory', $data);
    	if($this->db->affected_rows() > 0){
		    return true; // to the controller
		}
    }
    
    function submit_edited_data($data, $id){
        $this->db->where('id', $id);
        $this->db->update('directory', $data); 
        
    	if($this->db->affected_rows() > 0){
	    return true; // to the controller
        }
    }

}