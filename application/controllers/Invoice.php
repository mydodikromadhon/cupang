<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Invoice extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_invoice');

        if (!$this->session->userdata('iduser')) {
            redirect('login');
        }
    }
    public function index()
    {

        $template = array(
            'main' => 'pages/invoice/v_indexinvoice',
            'data' => $this->M_invoice->index('m_invoice')->result(),
        );
        $this->load->view('pages/layouts', $template);
    }

    public function store()
    {

        $data = array(
            'nama' => $this->input->post('nama'),
            'tema' => $this->input->post('tema'),
            'noinvoice' => $this->input->post('noinvoice'),
            'dateinvoice' => $this->input->post('dateinvoice'),
            'jasa' => $this->input->post('jasa'),
            'ppn' => $this->input->post('ppn'),
            'pph' => $this->input->post('pph'),
            'nominal' => $this->input->post('nominal'),
            'nofaktur' => $this->input->post('nofaktur'),
            'tglpengiriman' => $this->input->post('tglpengiriman'),
            'pengirimanvia' => $this->input->post('pengirimanvia'),
            'rencanapembayaran' => $this->input->post('rencanapembayaran'),
            'bayartanggal' => $this->input->post('bayartanggal'),
            'bayarnominal' => $this->input->post('bayarnominal'),
            'pembayaran' => $this->input->post('pembayaran'),
            'keterangan' => $this->input->post('keterangan'),
        );

        $this->M_invoice->store('m_invoice', $data);

        $this->session->set_flashdata('success', 'Stored Data');

        redirect('invoice');
    }

    public function update()
    {

        $data = array(
            'nama' => $this->input->post('nama'),
            'tema' => $this->input->post('tema'),
            'noinvoice' => $this->input->post('noinvoice'),
            'dateinvoice' => $this->input->post('dateinvoice'),
            'jasa' => $this->input->post('jasa'),
            'ppn' => $this->input->post('ppn'),
            'pph' => $this->input->post('pph'),
            'nominal' => $this->input->post('nominal'),
            'nofaktur' => $this->input->post('nofaktur'),
            'tglpengiriman' => $this->input->post('tglpengiriman'),
            'pengirimanvia' => $this->input->post('pengirimanvia'),
            'rencanapembayaran' => $this->input->post('rencanapembayaran'),
            'bayartanggal' => $this->input->post('bayartanggal'),
            'bayarnominal' => $this->input->post('bayarnominal'),
            'pembayaran' => $this->input->post('pembayaran'),
            'keterangan' => $this->input->post('keterangan'),
        );

        $where = array(
            'idinvoice' => $this->input->post('idinvoice')
        );

        $this->M_invoice->update('m_invoice', $where, $data);

        $this->session->set_flashdata('success', 'Updated Data');

        redirect('invoice');
    }
}
