<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_register');
	}
	public function index()
	{
		if($this->session->userdata('iduser') == null)
		{
			$this->load->view('pages/v_register');
		}else{
			redirect('dashboard');
		}
		
	}

	public function store()
	{
		$firstname = $this->input->post('firstname');
		$lastname = $this->input->post('lastname');
		$email = $this->input->post('email');
		$password = md5($this->input->post('password'));
		$position = $this->input->post('position');

		$data = array(
			'fname'=>$firstname,
			'lname'=>$lastname,
			'email'=>$email,
			'password'=>$password,
			'position'=>$position,
			'status'=>'1',
		);
		$check = $this->M_register->store('tbl_user',$data);

		$session = array(
			'fname' => $check['fname'],
            'lname' => $check['lname'],
            'email'     => $check['email'],
            'password'  => $check['password'],
            'position'    => $check['position'],
            'iduser'  => $check['iduser'],
            'status'   => $check['status']
		);
		 $this->session->set_userdata($session);

           if($position == 'admin'){
           	redirect('dashboard');
           }else if($position == 'financeakunting' ){
           	redirect('dashboard');
           }else if($position == 'media' ){
           	redirect('dashboard');
           }else if($position == 'operasional' ){
           	redirect('dashboard');
           }else{
           	redirect('register');
           }




		
	}
}
