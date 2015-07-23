<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class inputs extends CI_Controller {

	function __construct(){
                parent::__construct();
		$this->load->model("model_inputs");
	}
        
	public function submit_data()
	{
		$data['name'] = $this->input->post('name');
		$data['code'] = $this->input->post('code');
		$data['methodology'] = $this->input->post('methodology');
		$data['performed'] = $this->input->post('performed');
		$data['reported' ]= $this->input->post('reported');
		$data['specimen_req'] = $this->input->post('specimen_req');
		$data['cpt_code'] = $this->input->post('cpt_code');

		$result = $this->model_inputs->submit_data($data);

		if($result){
			echo 'success';
		}else{
			echo 'failed';
		}
		
	}
        
        public function submit_edited_data()
	{       
                $id = $this->input->post('id');
		$data['name'] = $this->input->post('name');
		$data['code'] = $this->input->post('code');
		$data['methodology'] = $this->input->post('methodology');
		$data['performed'] = $this->input->post('performed');
		$data['reported' ]= $this->input->post('reported');
		$data['specimen_req'] = $this->input->post('specimen_req');
		$data['cpt_code'] = $this->input->post('cpt_code');

		$result = $this->model_inputs->submit_edited_data($data, $id);

		if($result){
                    echo 'success';
		}else{
                    echo 'failed';
		}
		
	}


	
}
