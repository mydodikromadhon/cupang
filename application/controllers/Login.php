<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_login');
		
	}
	public function index()
	{
		if($this->session->userdata('iduser') == null){
			$this->load->view('pages/v_login');
		}else{
			redirect('dashboard');
		}
		
	}
	public function store()
	{
		$email = $this->input->post('email');
		$password = md5($this->input->post('password'));

		$where = array(
			'email'=>$email,
			'password'=>$password,
		);

		$check = $this->M_login->store('tbl_user',$where);

		if($check['email'] == $email && $check['password'] == $password){
			
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

           if($check['position'] == 'admin'){
           	redirect('dashboard');
           }else if($check['position'] == 'financeakunting' ){
           	redirect('dashboard');
           }else if($check['position'] == 'media' ){
           	redirect('dashboard');
           }else if($check['position'] == 'operasional' ){
           	redirect('dashboard');
           }else{
           	$this->session->set_flashdata('error','akses anda tidak terdaftar');
           	redirect('login');
           }
		}else{
			redirect('login');
		}
	}
}
