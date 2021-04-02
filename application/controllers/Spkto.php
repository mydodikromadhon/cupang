<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Spkto extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_spkto');

        if (!$this->session->userdata('iduser')) {
            redirect('login');
        }
    }
    public function index()
    {

        $template = array(
            'main' => 'pages/spk/v_spkto',
            'data' => $this->M_spkto->index('tbl_spkto')->result(),
        );
        $this->load->view('pages/layouts', $template);
    }

    public function store()
    {

        $data = array(
            'nomoraddto' => $this->input->post('nomoraddto'),
            'nama' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat'),
            'nohp' => $this->input->post('nohp'),
            'datejoin' => $this->input->post('datejoin'),

        );

        $this->M_spkto->store('tbl_spkto', $data);

        $this->session->set_flashdata('success', 'Stored Data');

        redirect('spkto');
    }

    public function update()
    {

        $data = array(
            'nomoraddto' => $this->input->post('nomoraddto'),
            'nama' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat'),
            'nohp' => $this->input->post('nohp'),
            'datejoin' => $this->input->post('datejoin'),

        );

        $where = array(
            'id_spkto' => $this->input->post('id_spkto')
        );

        $this->M_spkto->update('tbl_spkto', $where, $data);

        $this->session->set_flashdata('success', 'Updated Data');

        redirect('spkto');
    }
}
