<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	 
	public function index()
	{
		$data['user'] = $this->session->userdata('user');
		if (isset($data['user'])) {
			 redirect('login/account');
		}
		$this->load->view('login');
	}
	public function submit_login(){
		$data = $this->input->post();
 

                $this->form_validation->set_rules('email', 'Email', 'required');
                $this->form_validation->set_rules('password', 'Password', 'required');
                
                 
                if ($this->form_validation->run() == FALSE)
                {
                       $this->load->view('login');
	
                }
                else
                {
                		 
                	$email = $this->input->post('email');
                	$password = $this->input->post('password');

                	$user = $this->db->select('*')->where('email',$email)->where('password',$password)->get('users')->row_array();
                	if(isset($user)){
                			  $this->session->set_userdata(array('user'=>$user));  
                			 redirect('login/Account');

                	}else{
                		var_dump('Wrong Username & password');die;
                	}

                }

	}


	public function Account(){

		$data['user'] = $this->session->userdata('user');
		if (!isset($data['user'])) {
			 redirect('login/index');
		}
		if ($data['user']['user_type'] == "manager") {
			$data['employees'] = $this->db->select('*')->where('user_type','employee')->get('users')->result_array();
			//var_dump($data['employees']);
		}
		 
		  $this->load->view('account',$data);
	}

	public function logout(){
		$this->session->unset_userdata('user');
		 redirect('login/index');
	}
}
