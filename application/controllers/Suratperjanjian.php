<?php
defined('BASEPATH') or exit('No direct script access allowed');

class SuratPerjanjian extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_suratperjanjian');

        if (!$this->session->userdata('iduser')) {
            redirect('login');
        }
    }
    public function index()
    {

        $template = array(
            'main' => 'pages/invoice/v_suratperjanjian',
            'invoice' => $this->M_suratperjanjian->index('m_invoice')->result(),
            'data' => $this->M_suratperjanjian->indexJoin('tbl_suratperjanjian')->result(),

        );
        $this->load->view('pages/layouts', $template);
    }

    public function store()
    {

        $data = array(
            'no_invoice' => $this->input->post('no_invoice'),
            'namaperusahaan' => $this->input->post('namaperusahaan'),
            'no_perjanjian' => $this->input->post('no_perjanjian'),
            'title' => $this->input->post('title'),
            'tahap_perjanjian' => $this->input->post('tahap_perjanjian'),
            'tanggal' => $this->input->post('tanggal'),
            'pic1' => $this->input->post('pic1'),
        );

        $this->M_suratperjanjian->store('tbl_suratperjanjian', $data);

        $this->session->set_flashdata('success', 'Stored Data');

        redirect('suratperjanjian');
    }

    public function update()
    {

        $data = array(
            'no_invoice' => $this->input->post('no_invoice'),
            'namaperusahaan' => $this->input->post('namaperusahaan'),
            'no_perjanjian' => $this->input->post('no_perjanjian'),
            'title' => $this->input->post('title'),
            'tahap_perjanjian' => $this->input->post('tahap_perjanjian'),
            'tanggal' => $this->input->post('tanggal'),
            'pic1' => $this->input->post('pic1'),
        );

        $where = array(
            'id_suratperjanjian' => $this->input->post('id_suratperjanjian')
        );

        $this->M_suratperjanjian->update('tbl_suratperjanjian', $where, $data);

        $this->session->set_flashdata('success', 'Updated Data');

        redirect('suratperjanjian');
    }
}
