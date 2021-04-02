<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Penawaran extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_penawaran');

        if (!$this->session->userdata('iduser')) {
            redirect('login');
        }
    }
    public function index()
    {

        $template = array(
            'main' => 'pages/penawaran/v_indexpenawaran',
            'data' => $this->M_penawaran->index('m_penawaran')->result(),
        );
        $this->load->view('pages/layouts', $template);
    }

    public function store()
    {

        $data = array(
            'nomor' => $this->input->post('nomor'),
            'namaperusahaan' => $this->input->post('namaperusahaan'),
            'namadirektur' => $this->input->post('namadirektur'),
            'masakontrak_awal' => $this->input->post('masakontrak_awal'),
            'masakontrak_akhir' => $this->input->post('masakontrak_akhir'),
            'kota' => $this->input->post('kota'),
            'tanggalpengajuan' => $this->input->post('tanggalpengajuan'),
            'status' => $this->input->post('status'),
        );

        $this->M_penawaran->store('m_penawaran', $data);

        $this->session->set_flashdata('success', 'Stored Data');

        redirect('penawaran');
    }

    public function update()
    {

        $data = array(
            'nomor' => $this->input->post('nomor'),
            'namaperusahaan' => $this->input->post('namaperusahaan'),
            'namadirektur' => $this->input->post('namadirektur'),
            'masakontrak_awal' => $this->input->post('masakontrak_awal'),
            'masakontrak_akhir' => $this->input->post('masakontrak_akhir'),
            'kota' => $this->input->post('kota'),
            'nominal' => $this->input->post('nominal'),
            'tanggalpengajuan' => $this->input->post('tanggalpengajuan'),
            'status' => $this->input->post('status'),
        );

        $where = array(
            'id_penawaran' => $this->input->post('id_penawaran')
        );

        $this->M_penawaran->update('m_penawaran', $where, $data);

        $this->session->set_flashdata('success', 'Updated Data');

        redirect('penawaran');
    }
}
