<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Nonkontrak extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_nonkontrak');

        if (!$this->session->userdata('iduser')) {
            redirect('login');
        }
    }
    public function index()
    {

        $template = array(
            'main' => 'pages/finance/v_nonkontrak',
            'data' => $this->M_nonkontrak->index('tbl_nonkontrak')->result(),
        );
        $this->load->view('pages/layouts', $template);
    }

    public function store()
    {

        $data = array(
            'media' => $this->input->post('media'),
            'brand' => $this->input->post('brand'),
            'kota_kab' => $this->input->post('kota_kab'),
            'tema' => $this->input->post('tema'),
            'total' => $this->input->post('total'),
        );

        $this->M_monitoringnonkontrak->store('tbl_nonkontrak', $data);

        $this->session->set_flashdata('success', 'Stored Data');

        redirect('nonkontrak');
    }

    public function update()
    {

        $data = array(
            'media' => $this->input->post('media'),
            'brand' => $this->input->post('brand'),
            'kota_kab' => $this->input->post('kota_kab'),
            'tema' => $this->input->post('tema'),
            'total' => $this->input->post('total'),
        );

        $where = array(
            'id_nonkontrak' => $this->input->post('id_nonkontrak')
        );

        $this->M_nonkontrak->update('tbl_nonkontrak', $where, $data);

        $this->session->set_flashdata('success', 'Updated Data');

        redirect('nonkontrak');
    }
}
