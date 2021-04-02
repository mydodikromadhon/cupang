<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MonitoringHutang extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_monitoringhutang');

        if (!$this->session->userdata('iduser')) {
            redirect('login');
        }
    }
    public function index()
    {

        $template = array(
            'main' => 'pages/finance/v_monitoringhutang',
            'data' => $this->M_monitoringhutang->index('tbl_monitoringhutang')->result(),
        );
        $this->load->view('pages/layouts', $template);
    }

    public function store()
    {

        $data = array(
            'tanggal' => $this->input->post('tanggal'),
            'brand' => $this->input->post('brand'),
            'nomor' => $this->input->post('nom  or'),
            'nama_media' => $this->input->post('nama_media'),
            'deskripsi' => $this->input->post('deskripsi'),
            'unit' => $this->input->post('unit'),
            'ukuran' => $this->input->post('ukuran'),
            'harga_per_unit' => $this->input->post('harga_per_unit'),
            'total' => $this->input->post('total'),
            'persentasi_pekerjaan' => $this->input->post('persentasi_pekerjaan'),
            'totalpengambilan_tanggal' => $this->input->post('totalpengambilan_tanggal'),
            'totalpengambilan_total' => $this->input->post('totalpengambilan_total'),

        );

        $this->M_monitoringhutang->store('tbl_monitoringhutang', $data);

        $this->session->set_flashdata('success', 'Stored Data');

        redirect('monitoringhutang');
    }

    public function update()
    {

        $data = array(
            'tanggal' => $this->input->post('tanggal'),
            'brand' => $this->input->post('brand'),
            'nomor' => $this->input->post('nomor'),
            'nama_media' => $this->input->post('nama_media'),
            'deskripsi' => $this->input->post('deskripsi'),
            'unit' => $this->input->post('unit'),
            'ukuran' => $this->input->post('ukuran'),
            'harga_per_unit' => $this->input->post('harga_per_unit'),
            'total' => $this->input->post('total'),
            'persentasi_pekerjaan' => $this->input->post('persentasi_pekerjaan'),
            'totalpengambilan_tanggal' => $this->input->post('totalpengambilan_tanggal'),
            'totalpengambilan_total' => $this->input->post('totalpengambilan_total'),

        );

        $where = array(
            'id_monitoringhutang' => $this->input->post('id_monitoringhutang')
        );

        $this->M_monitoringhutang->update('tbl_monitoringhutang', $where, $data);

        $this->session->set_flashdata('success', 'Updated Data');

        redirect('monitoringhutang');
    }
}
