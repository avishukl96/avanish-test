<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Second_task extends CI_Controller {

	 
	public function index()
	{
		 
		$data['tasks'] = $this->db->select('*')->get('task')->result_array();

		$this->load->view('second/index',$data);
	}

	public function edit_task($task_id = null){
		if (isset($task_id)) {
			$data['task'] = $this->db->select('*')->where('id',$task_id)->get('task')->row_array();
			//var_dump($data['task']);die;
			$this->load->view('second/edit_task',$data);
		}
		
	}

	public function submit_task($task_id = null){
		if (isset($task_id)) {
			$data = $this->input->post();
			$this->db->where('id',$task_id);
			$this->db->update('task',$data);

			redirect('second_task/index');
			 
		}
		
	}

	public function delete_task($task_id = null){
		if (isset($task_id)) {
			$this->db->where('id',$task_id);
			$this->db->delete('task');
			redirect('second_task/index');
		}
	}
	 
}
