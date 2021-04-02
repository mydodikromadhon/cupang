<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PenerimaanKas extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_penerimaankas');

        if (!$this->session->userdata('iduser')) {
            redirect('login');
        }
    }
    public function index()
    {

        $template = array(
            'main' => 'pages/finance/v_penerimaankas',
            'data' => $this->M_penerimaankas->index('tbl_penerimaankas')->result(),
        );
        $this->load->view('pages/layouts', $template);
    }

    public function store()
    {

        $data = array(
            'tanggal' => $this->input->post('tanggal'),
            'keterangan' => $this->input->post('keterangan'),
            'ref' => $this->input->post('ref'),
            'debet_kas' => $this->input->post('debet_kas'),
            'kredit_piutang' => $this->input->post('kredit_piutang'),
            'kredit_pendapatan' => $this->input->post('kredit_pendapatan'),
            'kredit_serbaserbi_ref' => $this->input->post('kredit_serbaserbi_ref'),
            'kredit_serbaserbi_akun' => $this->input->post('kredit_serbaserbi_akun'),
            'kredit_serbaserbi_jumlah' => $this->input->post('kredit_serbaserbi_jumlah'),

        );

        $this->M_penerimaankas->store('tbl_penerimaankas', $data);

        $this->session->set_flashdata('success', 'Stored Data');

        redirect('penerimaankas');
    }

    public function update()
    {

        $data = array(
            'tanggal' => $this->input->post('tanggal'),
            'keterangan' => $this->input->post('keterangan'),
            'ref' => $this->input->post('ref'),
            'debet_kas' => $this->input->post('debet_kas'),
            'kredit_piutang' => $this->input->post('kredit_piutang'),
            'kredit_pendapatan' => $this->input->post('kredit_pendapatan'),
            'kredit_serbaserbi_ref' => $this->input->post('kredit_serbaserbi_ref'),
            'kredit_serbaserbi_akun' => $this->input->post('kredit_serbaserbi_akun'),
            'kredit_serbaserbi_jumlah' => $this->input->post('kredit_serbaserbi_jumlah'),
        );

        $where = array(
            'id_penerimaankas' => $this->input->post('id_penerimaankas')
        );

        $this->M_penerimaankas->update('tbl_penerimaankas', $where, $data);

        $this->session->set_flashdata('success', 'Updated Data');

        redirect('penerimaankas');
    }
}
