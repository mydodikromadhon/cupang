<?php
defined('BASEPATH') or exit('No direct script access allowed');

class GambarSpk extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_gambarspk');
        $this->load->helper('url');

        if (!$this->session->userdata('iduser')) {
            redirect('login');
        }
    }
    public function index()
    {

        $template = array(
            'main' => 'pages/spkdetail/v_gambarspk',
            'spk' => $this->M_gambarspk->index('m_spk')->result(),
            'data' => $this->M_gambarspk->indexJoin('m_gambarspk')->result(),
        );
        $this->load->view('pages/layouts', $template);
    }

    public function store()
    {

        $this->load->library('upload');

        $dataInfo = array();
        $files = $_FILES;
        $cpt = count($_FILES['gambar']['name']);
        if ($cpt == 6) {
            for ($i = 0; $i < $cpt; $i++) {
                $_FILES['gambar']['name'] = $files['gambar']['name'][$i];
                $_FILES['gambar']['type'] = $files['gambar']['type'][$i];
                $_FILES['gambar']['tmp_name'] = $files['gambar']['tmp_name'][$i];
                $_FILES['gambar']['error'] = $files['gambar']['error'][$i];
                $_FILES['gambar']['size'] = $files['gambar']['size'][$i];

                $this->upload->initialize($this->set_upload_options());
                if ($this->upload->do_upload('gambar')) {
                    $dataInfo[] = $this->upload->data();
                } else {
                    print_r($this->upload->display_errors());
                }
            }

            $data = array(

                'idspk' => $this->input->post('idspk'),
                'gambarspk1' => $dataInfo[0]['file_name'],
                'gambarspk2' => $dataInfo[1]['file_name'],
                'gambarspk3' => $dataInfo[2]['file_name'],
                'gambarspk4' => $dataInfo[3]['file_name'],
                'gambarspk5' => $dataInfo[4]['file_name'],
                'gambarspk6' => $dataInfo[5]['file_name'],

            );

            $this->M_gambarspk->store('m_gambarspk', $data);

            $this->session->set_flashdata('success', 'Stored Data');

            redirect('gambarspk');
        } else {
            $this->session->set_flashdata('error', 'harus memasukkan 6 gambar');
            redirect('gambarspk');
        }
    }

    public function update()
    {
        $id_gambarspk = $this->input->post('id_gambarspk');
        $where = array('id_gambarspk' => $id_gambarspk);
        $row = $this->M_gambarspk->index('m_gambarspk', $where)->first_row();

        $this->load->library('upload');

        $dataInfo = array();
        $files = $_FILES;
        $cpt = count($_FILES['gambar']['name']);
        if ($cpt != 1) {
            unlink("assets/images/" . $row->gambar1);
            unlink("assets/images/" . $row->gambar2);
            unlink("assets/images/" . $row->gambar3);
            unlink("assets/images/" . $row->gambar4);
            unlink("assets/images/" . $row->gambar5);
            unlink("assets/images/" . $row->gambar6);
            for ($i = 0; $i < $cpt; $i++) {
                $_FILES['gambar']['name'] = $files['gambar']['name'][$i];
                $_FILES['gambar']['type'] = $files['gambar']['type'][$i];
                $_FILES['gambar']['tmp_name'] = $files['gambar']['tmp_name'][$i];
                $_FILES['gambar']['error'] = $files['gambar']['error'][$i];
                $_FILES['gambar']['size'] = $files['gambar']['size'][$i];


                $this->upload->initialize($this->set_upload_options());
                if ($this->upload->do_upload('gambar')) {
                    $dataInfo[] = $this->upload->data();
                } else {
                    print_r($this->upload->display_errors());
                }
            }
            $data = array(
                'idspk' => $this->input->post('idspk'),
                'gambarspk1' => $dataInfo[0]['file_name'],
                'gambarspk2' => $dataInfo[1]['file_name'],
                'gambarspk3' => $dataInfo[2]['file_name'],
                'gambarspk4' => $dataInfo[3]['file_name'],
                'gambarspk5' => $dataInfo[4]['file_name'],
                'gambarspk6' => $dataInfo[5]['file_name'],
            );
        } else {
            $data = array(
                'idspk' => $this->input->post('idspk'),
                'gambarspk1' => $dataInfo[0]['file_name'],
                'gambarspk2' => $dataInfo[1]['file_name'],
                'gambarspk3' => $dataInfo[2]['file_name'],
                'gambarspk4' => $dataInfo[3]['file_name'],
                'gambarspk5' => $dataInfo[4]['file_name'],
                'gambarspk6' => $dataInfo[5]['file_name'],
            );
        }


        $this->M_gambarspk->update('m_gambarspk', $where, $data);

        $this->session->set_flashdata('success', 'Updated Data');

        redirect('gambarspk');
    }

    private function set_upload_options()
    {
        $config = array();
        $config['upload_path'] = 'assets/images/';
        $config['allowed_types']    = 'jpg|jpeg|png|gif';
        $config['max_size']         = '2048'; // 2 MB
        $config['encrypt_name']        = TRUE;

        return $config;
    }
}
