<?php
defined('BASEPATH') or exit('No direct script access allowed');

class FakturPajak extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_fakturpajak');
        $this->load->helper('url');

        if (!$this->session->userdata('iduser')) {
            redirect('login');
        }
    }
    public function index()
    {

        $template = array(
            'main' => 'pages/invoice/v_fakturpajak',
            'invoice' => $this->M_fakturpajak->index('m_invoice')->result(),
            'data' => $this->M_fakturpajak->indexJoin('tbl_fakturpajak')->result(),
        );
        $this->load->view('pages/layouts', $template);
    }

    public function store()
    {
        $data = array(

            'noinvoice' => $this->input->post('noinvoice'),
            'nama' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat'),
            'npwp' => $this->input->post('npwp'),
            'no_seri' => $this->input->post('no_seri'),
            'jumlah_fakturpajak' => $this->input->post('jumlah_fakturpajak'),

        );


        $this->M_fakturpajak->store('tbl_fakturpajak', $data);

        $this->session->set_flashdata('success', 'Stored Data');

        redirect('fakturpajak');
    }


    public function update()
    {

        $data = array(
            'noinvoice' => $this->input->post('noinvoice'),
            'nama' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat'),
            'npwp' => $this->input->post('npwp'),
            'no_seri' => $this->input->post('no_seri'),
            'jumlah_fakturpajak' => $this->input->post('jumlah_fakturpajak'),
        );

        $where = array(
            'id_fakturpajak' => $this->input->post('id_fakturpajak')
        );

        $this->M_fakturpajak->update('tbl_fakturpajak', $where, $data);

        $this->session->set_flashdata('success', 'Updated Data');

        redirect('fakturpajak');
    }
}
