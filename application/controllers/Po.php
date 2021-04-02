<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Po extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_po');

        if (!$this->session->userdata('iduser')) {
            redirect('login');
        }
    }
    public function index()
    {

        $template = array(
            'main' => 'pages/po/v_indexpo',
            'data' => $this->M_po->index('m_po')->result(),
        );
        $this->load->view('pages/layouts', $template);
    }

    public function store()
    {

        $data = array(
            'nopo' => $this->input->post('nopo'),
            'startdate' => $this->input->post('startdate'),
            'enddate' => $this->input->post('enddate'),
            'invoicedate' => $this->input->post('invoicedate'),
            'nominal' => $this->input->post('nominal'),
            'paydate' => $this->input->post('paydate'),
            'statusbayar' => $this->input->post('statusbayar'),
        );

        $this->M_po->store('m_po', $data);

        $this->session->set_flashdata('success', 'Stored Data');

        redirect('po');
    }

    public function update()
    {

        $data = array(
            'nopo' => $this->input->post('nopo'),
            'startdate' => $this->input->post('startdate'),
            'enddate' => $this->input->post('enddate'),
            'invoicedate' => $this->input->post('invoicedate'),
            'nominal' => $this->input->post('nominal'),
            'paydate' => $this->input->post('paydate'),
            'statusbayar' => $this->input->post('statusbayar'),
        );

        $where = array(
            'id_po' => $this->input->post('id_po')
        );

        $this->M_po->update('m_po', $where, $data);

        $this->session->set_flashdata('success', 'Updated Data');

        redirect('po');
    }
}
