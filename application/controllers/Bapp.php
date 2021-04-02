<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Bapp extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_bapp');

        if (!$this->session->userdata('iduser')) {
            redirect('login');
        }
    }
    public function index()
    {

        $template = array(
            'main' => 'pages/invoice/v_bapp',
            'customer' => $this->M_bapp->index('tbl_customer')->result(),
            'po' => $this->M_bapp->index('m_po')->result(),
            'penawaran' => $this->M_bapp->index('m_penawaran')->result(),
            'data' => $this->M_bapp->indexJoin('tbl_bapp')->result(),
        );
        $this->load->view('pages/layouts', $template);
    }

    public function store()
    {

        $data = array(
            'namaperusahaan' => $this->input->post('namaperusahaan'),
            'no_kontrak' => $this->input->post('no_kontrak'),
            'deskripsi' => $this->input->post('deskripsi'),
            'nomor' => $this->input->post('nomor'),
            'tanggal' => $this->input->post('tanggal'),
            'status_bapp' => $this->input->post('status_bapp'),
            'tanggal_kembali' => $this->input->post('tanggal_kembali'),
            'keterangan' => $this->input->post('keterangan'),
        );

        $this->M_bapp->store('tbl_bapp', $data);

        $this->session->set_flashdata('success', 'Stored Data');

        redirect('bapp');
    }

    public function update()
    {

        $data = array(
            'namaperusahaan' => $this->input->post('namaperusahaan'),
            'no_kontrak' => $this->input->post('no_kontrak'),
            'deskripsi' => $this->input->post('deskripsi'),
            'nomor' => $this->input->post('nomor'),
            'tanggal' => $this->input->post('tanggal'),
            'status_bapp' => $this->input->post('status_bapp'),
            'tanggal_kembali' => $this->input->post('tanggal_kembali'),
            'keterangan' => $this->input->post('keterangan'),
        );

        $where = array(
            'id_bapp' => $this->input->post('id_bapp')
        );

        $this->M_bapp->update('tbl_bapp', $where, $data);

        $this->session->set_flashdata('success', 'Updated Data');

        redirect('bapp');
    }
}
