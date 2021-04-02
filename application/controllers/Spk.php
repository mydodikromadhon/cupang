<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Spk extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_spk');

		if (!$this->session->userdata('iduser')) {
			redirect('login');
		}
	}
	public function index()
	{

		$template = array(
			'main' => 'pages/spk/v_indexspk',
			'spkto' => $this->M_spk->index('tbl_spkto')->result(),
			'data' => $this->M_spk->index('m_spk')->result(),
		);
		$this->load->view('pages/layouts', $template);
	}

	public function store()
	{

		$data = array(
			'spktitle' => $this->input->post('spktitle'),
			'spknumber' => $this->input->post('spknumber'),
			'total' => $this->input->post('total'),
			'spkto' => $this->input->post('spkto'),
			'spkdate' => $this->input->post('spkdate'),
		);

		$this->M_spk->store('m_spk', $data);

		$this->session->set_flashdata('success', 'Stored Data');

		redirect('spk');
	}

	public function update()
	{

		$data = array(
			'spktitle' => $this->input->post('spktitle'),
			'spknumber' => $this->input->post('spknumber'),
			'total' => $this->input->post('total'),
			'spkto' => $this->input->post('spkto'),
			'spkdate' => $this->input->post('spkdate'),
		);

		$where = array(
			'idmasterspk' => $this->input->post('idmasterspk')
		);

		$this->M_spk->update('m_spk', $where, $data);

		$this->session->set_flashdata('success', 'Updated Data');

		redirect('spk');
	}
}
