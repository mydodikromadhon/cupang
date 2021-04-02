<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_dashboard');
	}
	public function index()
	{
		if($this->session->userdata('iduser') == null){
			redirect('login');
		}else{
		
		$template = array(
			'main'=>'pages/v_dashboard',
			'countcustomer'=>count($this->M_dashboard->index('tbl_customer')->result()),
			'activecustomer'=>count($this->M_dashboard->index_active('tbl_customer')->result()),
			'deactivecustomer'=>count($this->M_dashboard->index_deactive('tbl_customer')->result()),
		);
		$this->load->view('pages/layouts',$template);
		}
	
	}
}
