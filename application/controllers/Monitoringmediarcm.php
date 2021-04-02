<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Monitoringmediarcm extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_monitoringmediarcm');

        if (!$this->session->userdata('iduser')) {
            redirect('login');
        }
    }
    public function index()
    {

        $template = array(
            'main' => 'pages/finance/v_monitoringmediarcm',
            'data' => $this->M_monitoringmediarcm->index('tbl_mediarcm')->result(),
        );
        $this->load->view('pages/layouts', $template);
    }

    public function store()
    {

        $data = array(
            'jenis_media' => $this->input->post('jenis_media'),
            'brand' => $this->input->post('brand'),
            'alamat' => $this->input->post('alamat'),
            'kota_kab' => $this->input->post('kota_kab'),
            'periode_kontrak' => $this->input->post('periode_kontrak'),
            'total' => $this->input->post('total'),
            'januari' => $this->input->post('januari'),
            'febuari' => $this->input->post('febuari'),
            'maret' => $this->input->post('maret'),
            'april' => $this->input->post('april'),
            'mei' => $this->input->post('mei'),
            'juni' => $this->input->post('juni'),
            'juli' => $this->input->post('juli'),
            'agustus' => $this->input->post('agustus'),
            'september' => $this->input->post('september'),
            'oktober' => $this->input->post('oktober'),
            'november' => $this->input->post('november'),
            'desember' => $this->input->post('desember'),
        );

        $this->M_monitoringmediarcm->store('tbl_mediarcm', $data);

        $this->session->set_flashdata('success', 'Stored Data');

        redirect('monitoringmediarcm');
    }

    public function update()
    {

        $data = array(
            'jenis_media' => $this->input->post('jenis_media'),
            'brand' => $this->input->post('brand'),
            'alamat' => $this->input->post('alamat'),
            'kota_kab' => $this->input->post('kota_kab'),
            'periode_kontrak' => $this->input->post('periode_kontrak'),
            'total' => $this->input->post('total'),
            'januari' => $this->input->post('januari'),
            'febuari' => $this->input->post('febuari'),
            'maret' => $this->input->post('maret'),
            'april' => $this->input->post('april'),
            'mei' => $this->input->post('mei'),
            'juni' => $this->input->post('juni'),
            'juli' => $this->input->post('juli'),
            'agustus' => $this->input->post('agustus'),
            'september' => $this->input->post('september'),
            'oktober' => $this->input->post('oktober'),
            'november' => $this->input->post('november'),
            'desember' => $this->input->post('desember'),
        );

        $where = array(
            'id_mediarcm' => $this->input->post('id_mediarcm')
        );

        $this->M_monitoringmediarcm->update('tbl_mediarcm', $where, $data);

        $this->session->set_flashdata('success', 'Updated Data');

        redirect('monitoringmediarcm');
    }
}
