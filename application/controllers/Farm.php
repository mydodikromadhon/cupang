<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Farm extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_farm');
	}
	public function index()
	{
		if($this->session->userdata('iduser') == null){
			redirect('login');
		}else{
			$code = $this->M_farm->kodebarang('tbl_farm')->row();
			$kodebarang = $code->maxKode;
			$nourut = substr($kodebarang, 1, 6);
			$nourut++;
			$char="F";
			$kodebarangr = $char.sprintf("%06s", $nourut);
			$data = $this->M_farm->index('tbl_farm')->result();
			$template = array(
			'main'=>'pages/farm/v_farm',
			'data'=>$data,
			'city'=>$this->M_farm->index('m_city')->result(),
			'country'=>$this->M_farm->index('m_negara')->result(),
			'countfarm'=>count($this->M_farm->index_show('tbl_farm')->result()),
			'activefarm'=>count($this->M_farm->index_active('tbl_farm')->result()),
			'deactivefarm'=>count($this->M_farm->index_deactive('tbl_farm')->result()),
			'kodebarang'=>$kodebarangr,
			);
			$this->load->view('pages/layouts',$template);
		}
		
	}

	public function store()
	{
		$codefarm = $this->input->post('codefarm');
		$farmname = $this->input->post('farmname');
		$address01 = $this->input->post('address01');
		$city01 = $this->input->post('city01');
		$name01 = $this->input->post('name01');
		$jabatan01 = $this->input->post('jabatan01');
		$phone = $this->input->post('phone');
		$email = $this->input->post('email');
		$country = $this->input->post('country');
		$status = 1;
		$note = $this->input->post('note');

		$data = array(
		'codefarm'=>$codefarm,
		'farmname'=>$farmname,
		'address01'=>$address01,
		'city01'=>$city01,
		'name01'=>$name01,
		'jabatan01'=>$jabatan01,
		'phone'=>$phone,
		'email'=>$email,
		'country'=>$country,
		'status'=>$status,
		'note'=>$note,
		);

		$this->M_farm->store('tbl_farm',$data);

		$this->session->set_flashdata('success','Stored Data');

		redirect('farm');
	}

	public function update()
	{
		$idfarm = $this->input->post('idfarm');
		$farmname = $this->input->post('farmname');
		$address01 = $this->input->post('address01');
		$city01 = $this->input->post('city01');
		$name01 = $this->input->post('name01');
		$jabatan01 = $this->input->post('jabatan01');
		$phone = $this->input->post('phone');
		$email = $this->input->post('email');
		$country = $this->input->post('country');
		$status = $this->input->post('status');
		$note = $this->input->post('note');

		$data = array(
		'farmname'=>$farmname,
		'address01'=>$address01,
		'city01'=>$city01,
		'name01'=>$name01,
		'jabatan01'=>$jabatan01,
		'phone'=>$phone,
		'email'=>$email,
		'country'=>$country,
		'status'=>$status,
		'note'=>$note,
		);

		$where = array(
			'idfarm'=>$idfarm
		);

		$this->M_farm->update('tbl_farm',$where,$data);

		$this->session->set_flashdata('success','Updated Data');

		redirect('farm');


	}
}
