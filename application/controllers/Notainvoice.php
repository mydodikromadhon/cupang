<?php
defined('BASEPATH') or exit('No direct script access allowed');

class NotaInvoice extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_notainvoice');
        $this->load->library('pdf');

        if (!$this->session->userdata('iduser')) {
            redirect('login');
        }
    }
    public function index()
    {

        $template = array(
            'main' => 'pages/notainvoice/v_indexnotainvoice',
            'invoice' => $this->M_notainvoice->index('m_invoice')->result(),
            'data' => $this->M_notainvoice->indexJoin('tbl_invoice')->result(),
        );
        $this->load->view('pages/layouts', $template);
    }

    public function store()
    {

        $data = array(

            'noinvoice' => $this->input->post('noinvoice'),
            'dateinvoice' => $this->input->post('dateinvoice'),
            'jasa' => $this->input->post('jasa'),
            'ppn' => $this->input->post('ppn'),
            'pph' => $this->input->post('pph'),
            'nominal' => $this->input->post('nominal'),

        );

        $this->M_notainvoice->store('tbl_invoice', $data);

        $this->session->set_flashdata('success', 'Stored Data');

        redirect('notainvoice');
    }


    private function penyebut($nilai)
    {
        $nilai = abs($nilai);
        $huruf = array("", "satu", "dua", "tiga", "empat", "lima", "enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas");
        $temp = "";
        if ($nilai < 12) {
            $temp = " " . $huruf[$nilai];
        } else if ($nilai < 20) {
            $temp = $this->penyebut($nilai - 10) . " belas";
        } else if ($nilai < 100) {
            $temp = $this->penyebut($nilai / 10) . " puluh" . $this->penyebut($nilai % 10);
        } else if ($nilai < 200) {
            $temp = " seratus" . $this->penyebut($nilai - 100);
        } else if ($nilai < 1000) {
            $temp = $this->penyebut($nilai / 100) . " ratus" . $this->penyebut($nilai % 100);
        } else if ($nilai < 2000) {
            $temp = " seribu" . $this->penyebut($nilai - 1000);
        } else if ($nilai < 1000000) {
            $temp = $this->penyebut($nilai / 1000) . " ribu" . $this->penyebut($nilai % 1000);
        } else if ($nilai < 1000000000) {
            $temp = $this->penyebut($nilai / 1000000) . " juta" . $this->penyebut($nilai % 1000000);
        } else if ($nilai < 1000000000000) {
            $temp = $this->penyebut($nilai / 1000000000) . " milyar" . $this->penyebut(fmod($nilai, 1000000000));
        } else if ($nilai < 1000000000000000) {
            $temp = $this->penyebut($nilai / 1000000000000) . " trilyun" . $this->penyebut(fmod($nilai, 1000000000000));
        }
        return $temp;
    }

    private function terbilang($nilai)
    {
        $nilai = floatval($nilai);
        if ($nilai < 0) {
            $hasil = "minus " . trim($this->penyebut($nilai));
        } else {
            $hasil = trim($this->penyebut($nilai));
        }
        return $hasil;
    }

    public function printpdf()
    {
        $this->load->library('pdf');
        $id = $this->uri->segment(3);
        $where = array(
            'idmasterspk' => $id,
        );
        $where2 = array(
            'idspk' => $id,
        );
        $max = $this->db->query("SELECT SUM(biaya) as 'biaya' FROM tbl_spkdetail")->row();
        $terbilang = $this->terbilang($max->biaya);
        $array = array(
            'data' => $this->M_notaspk->indexJoinWhere('tbl_spkdetail', $where)->first_row(),
            'spkdetail' => $this->M_notaspk->IndexWhere('tbl_spkdetail', $where2)->result(),
            'max' => $max->biaya,
            'button' => '0',
            'id' => $id,
            'terbilang' => $terbilang,
        );

        $this->pdf->load_view('pages/notaspk/v_printnota', $array);
    }
    public function showPdf()
    {
        $id = $this->uri->segment(3);
        $where = array(
            'idmasterspk' => $id,
        );
        $where2 = array(
            'idspk' => $id,
        );
        $max = $this->db->query("SELECT SUM(biaya) as 'biaya' FROM tbl_spkdetail")->row();
        $terbilang = $this->terbilang($max->biaya);
        $array = array(
            'data' => $this->M_notaspk->indexJoinWhere('tbl_spkdetail', $where)->first_row(),
            'spkdetail' => $this->M_notaspk->IndexWhere('tbl_spkdetail', $where2)->result(),
            'max' => $max->biaya,
            'button' => '1',
            'id' => $id,
            'terbilang' => $terbilang,
        );
        $this->load->view('pages/notaspk/v_printnota', $array);
    }
}
