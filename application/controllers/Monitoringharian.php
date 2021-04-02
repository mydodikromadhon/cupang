<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Monitoringharian extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_monitoringharian');

        if (!$this->session->userdata('iduser')) {
            redirect('login');
        }
    }
    public function index()
    {

        $template = array(
            'main' => 'pages/finance/v_monitoringharian',
            'data' => $this->M_monitoringharian->index('tbl_monitoringharian')->result(),
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
            'tempory' => $this->input->post('tempory'),
            'jan' => $this->input->post('jan'),
            'feb' => $this->input->post('feb'),
            'mar' => $this->input->post('mar'),
            'apr' => $this->input->post('apr'),
            'mei' => $this->input->post('mei'),
            'jun' => $this->input->post('jun'),
            'jul' => $this->input->post('jul'),
            'agust' => $this->input->post('agust'),
            'sept' => $this->input->post('sept'),
            'oktob' => $this->input->post('oktob'),
            'novem' => $this->input->post('novem'),
            'desem' => $this->input->post('desem'),

        );

        $this->M_monitoringharian->store('tbl_monitoringharian', $data);

        $this->session->set_flashdata('success', 'Stored Data');

        redirect('monitoringharian');
    }


    public function update()
    {

        $data = array(
            'jenis_media' => $this->input->post('jenis_media'),
            'brand' => $this->input->post('brand'),
            'alamat' => $this->input->post('alamat'),
            'kota_kab' => $this->input->post('kota_kab'),
            'tempory' => $this->input->post('tempory'),
            'jan' => $this->input->post('jan'),
            'feb' => $this->input->post('feb'),
            'mar' => $this->input->post('mar'),
            'apr' => $this->input->post('apr'),
            'mei' => $this->input->post('mei'),
            'jun' => $this->input->post('jun'),
            'jul' => $this->input->post('jul'),
            'agust' => $this->input->post('agust'),
            'sept' => $this->input->post('sept'),
            'oktob' => $this->input->post('oktob'),
            'novem' => $this->input->post('novem'),
            'desem' => $this->input->post('desem'),

        );

        $where = array(
            'id_monitoringharian' => $this->input->post('id_monitoringharian')
        );

        $this->M_monitoringharian->update('tbl_monitoringharian', $where, $data);

        $this->session->set_flashdata('success', 'Updated Data');

        redirect('monitoringharian');
    }
}
