<?php
defined('BASEPATH') or exit('No direct script access allowed');

class SpkDetail extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_spkdetail');
		$this->load->helper('url');

		if (!$this->session->userdata('iduser')) {
			redirect('login');
		}
	}
	public function index()
	{

		$template = array(
			'main' => 'pages/spkdetail/v_indexspkdetail',
			'spk' => $this->M_spkdetail->index('m_spk')->result(),
			'data' => $this->M_spkdetail->indexJoin('tbl_spkdetail')->result(),
		);
		$this->load->view('pages/layouts', $template);
	}

	public function store()
	{
		$data = array(

			'idspk' => $this->input->post('idspk'),
			'lokasi' => $this->input->post('lokasi'),
			'tema' => $this->input->post('tema'),
			'ukuran' => $this->input->post('ukuran'),
			'jumlah' => $this->input->post('jumlah'),
			'spesifikasi' => $this->input->post('spesifikasi'),
			'periode_tayang' => $this->input->post('periode_tayang'),
			'harga' => $this->input->post('harga'),
			'pembayaranvia' => $this->input->post('pembayaranvia'),
			'biaya' => $this->input->post('biaya'),
			'tanggalapproval' => $this->input->post('tanggalapproval'),
		);

		$this->M_spkdetail->store('tbl_spkdetail', $data);

		$this->session->set_flashdata('success', 'Stored Data');

		redirect('spkdetail');
	}


	public function update()
	{

		$data = array(
			'idspk' => $this->input->post('idspk'),
			'lokasi' => $this->input->post('lokasi'),
			'tema' => $this->input->post('tema'),
			'ukuran' => $this->input->post('ukuran'),
			'jumlah' => $this->input->post('jumlah'),
			'spesifikasi' => $this->input->post('spesifikasi'),
			'periode_tayang' => $this->input->post('periode_tayang'),
			'harga' => $this->input->post('harga'),
			'pembayaranvia' => $this->input->post('pembayaranvia'),
			'biaya' => $this->input->post('biaya'),
			'tanggalapproval' => $this->input->post('tanggalapproval'),
		);

		$where = array(
			'idspkdetail' => $this->input->post('idspkdetail')
		);

		$this->M_spkdetail->update('tbl_spkdetail', $where, $data);

		$this->session->set_flashdata('success', 'Updated Data');

		redirect('spkdetail');
	}
}
