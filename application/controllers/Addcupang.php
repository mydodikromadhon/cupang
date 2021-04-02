<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Addcupang extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_cupang');
	}
	public function index()
	{
		if($this->session->userdata('iduser') == null){
			redirect('login');
		}else{
			$code = $this->M_cupang->codecupang('tbl_cupang')->row();
			$cupangno = $code->maxKode;
			$nourut = substr($cupangno, 1, 6);
			$nourut++;
			$char="CPNG";
			$codecupangr = $char.sprintf("%06s", $nourut);
			$data = $this->M_cupang->index('tbl_cupang')->result();
			$template = array(
			'main'=>'pages/cupang/v_indexcupang',
			'data'=>$data,
			'countcupang'=>count($this->M_cupang->index_show('tbl_cupang')->result()),
			'activecupang'=>count($this->M_cupang->index_active('tbl_cupang')->result()),
			'deactivecupang'=>count($this->M_cupang->index_deactive('tbl_cupang')->result()),
			'cupangno'=>$codecupangr,
			);
			$this->load->view('pages/layouts',$template);
		}
		
	}

	public function store()
	{
		$cupangno = $this->input->post('cupangno');
		$codecupang = $this->input->post('codecupang');
		$cupangname = $this->input->post('cupangname');
		$type = $this->input->post('type');
		$warna = $this->input->post('warna');
		$price = $this->input->post('price');
		$size = $this->input->post('size');
		$jeniskelamin = $this->input->post('jeniskelamin');
		$status = 1;
		$note = $this->input->post('note');

		$data = array(
		'cupangno'=>$cupangno,
		'codecupang'=>$codecupang,
		'cupangname'=>$cupangname,
		'type'=>$type,
		'warna'=>$warna,
		'price'=>$price,
		'size'=>$size,
		'jeniskelamin'=>$jeniskelamin,
		'status'=>$status,
		'note'=>$note,
		);

		$this->M_cupang->store('tbl_cupang',$data);

		$this->session->set_flashdata('success','Stored Data');

		redirect('addcupang');
	}

	public function update()
	{
		$idcupang = $this->input->post('idcupang');
		$codecupang = $this->input->post('codecupang');
		$cupangname = $this->input->post('cupangname');
		$type = $this->input->post('type');
		$warna = $this->input->post('warna');
		$price = $this->input->post('price');
		$size = $this->input->post('size');
		$jeniskelamin = $this->input->post('jeniskelamin');
		$status = $this->input->post('status');
		$note = $this->input->post('note');

		$data = array(
		'codecupang'=>$codecupang,
		'cupangname'=>$cupangname,
		'type'=>$type,
		'warna'=>$warna,
		'price'=>$price,
		'size'=>$size,
		'jeniskelamin'=>$jeniskelamin,
		'status'=>$status,
		'note'=>$note,
		);

		$where = array(
			'idcupang'=>$idcupang
		);

		$this->M_cupang->update('tbl_cupang',$where,$data);

		$this->session->set_flashdata('success','Updated Data');

		redirect('addcupang');


	}
}
