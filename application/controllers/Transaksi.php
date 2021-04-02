<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Transaksi extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_transaksi');
        $this->load->model('M_customer');
        $this->load->model('general_model');
        $this->load->library('pdf');
        $this->load->library('form_validation');

        if (!$this->session->userdata('iduser')) {
            redirect('login');
        }
    }
    public function index()
    {
        // $data['nomor'] = $this->general_model->generateAutoNumber('nomor');
        $template = array(
            'main' => 'pages/transaksi/v_indextransaksi',
            'data' => $this->M_transaksi->index('m_transaksi')->result(),
            'Sales' => $this->M_transaksi->ListSales(),
            'Cust' => $this->M_transaksi->ListCust(),
            'Source' => $this->M_transaksi->ListSource(),
            'Farm' => $this->M_transaksi->ListFarm(),
            'Cupang' => $this->M_transaksi->getCupang(),
			'city'=>$this->M_customer->index('m_city')->result(),
			'country'=>$this->M_customer->index('m_negara')->result(),
            'nomor' => $this->general_model->generateAutoNumber('nomor'),
            'nomor1' => $this->general_model->generate(),
            'ikan' => $this->M_transaksi->getCupang()
        );
        $this->load->view('pages/layouts', $template);
    }

    public function gettransaksi()
    {
        $row = $this->M_transaksi->getData($this->input->post('id'))->row();
        $rowd = $this->M_transaksi->getDataLanjut($this->input->post('id'))->result();
        
        $detail = "";
        foreach ($rowd as $rowdd) {
            $detail .= '<tr><td><input type="text" class="form-control" name="hidcupang" style="width:160px;" value="'.$rowdd->codecupang.'" readonly></td>
        <td><input type="text" class="form-control" name="hidcupang_detail" style="width:160px;" value="'.$rowdd->cupang_name.'" readonly></td>
        <td>
            <div class="input-group"> 
                <div class="input-group-prepend">
                    <span class="input-group-text">Rp</span>
                </div>
                <input type="text" class="form-control" name="harga" style="width:160px;" value="'.$rowdd->harga.'" readonly>
            </div>
        </td>
        <td>
            <input type="number" style="width:160px" class="form-control" name="qty" value="'.$rowdd->qty.'" readonly>
        </td>
        <td>
            <div class="input-group"> 
                <div class="input-group-prepend">
                    <span class="input-group-text">Rp</span>
                </div>
                <input type="number" style="width:160px" class="form-control" readonly value="'.$rowdd->total.'" name="total">
            </div>
        </td></tr>';
        }
        $callback = array(
            'list' => $row,
            'list_detail' => $detail
        ); 
        echo json_encode($callback);
    }

    public function getlastidcustomer(){
        $code = $this->M_customer->kodebarang('tbl_customer')->row();
			$kodebarang = $code->maxKode;
			$nourut = substr($kodebarang, 1, 6);
			$nourut++;
			$char="C";
			$kodebarangr = $char.sprintf("%06s", $nourut);
        echo $kodebarangr;
    }

    public function addnewdetail(){
        $option = "";
        $ikan = $this->M_transaksi->getCupang();
        foreach ($ikan as $value) {
            $option .= "<option value='$value->codecupang'" . set_select('codecupang', $value->codecupang) . ">$value->codecupang</option>";
        }
        echo $option;
    }
    
    public function addnewdetail2(){
        $option = "";
        $ikan = $this->M_transaksi->getCupang();
        foreach ($ikan as $value) {
            $option .= "<option value='" . $value->cupangname . " - " . $value->type . " - " . $value->warna . " - " . $value->size . " - " . $value->jeniskelamin ."'" 
                . set_select('cupang_name', $value->cupangname . " - " . $value->type . " - " . $value->warna . " - " . $value->size . " - " . $value->jeniskelamin) . ">" 
                . $value->cupangname . " - " . $value->type . " - " . $value->warna . " - " . $value->size . " - " . $value->jeniskelamin ."</option>";
        }
        echo $option;
    }

    public function checkcupang($tipe)
    {
        if ($this->input->post('id') != "") {
            if ($tipe == 'kode') {
                $codecupang = $this->input->post('id');
                $data = $this->db->query("SELECT * FROM tbl_cupang WHERE codecupang = '$codecupang'")->row();
                $val = $data->cupangname . " - " . $data->type . " - " . $data->warna . " - " . $data->size . " - " . $data->jeniskelamin;
                $val2 = $data->price;
            } else if ($tipe == 'nama') {
                $codecupang = explode(" - ",$this->input->post('id'));
                $data = $this->db->query("SELECT * FROM tbl_cupang WHERE cupangname = '".$codecupang[0]."' and type = '".$codecupang[1]."'
                    and warna = '".$codecupang[2]."' and size = '".$codecupang[3]."' and jeniskelamin = '".$codecupang[4]."'")->row();
                $val = $data->codecupang;
                $val2 = $data->price;
            }
            $callback = array(
                'list_kota' => $val,
                'list_harga' => $val2
            ); // Masukan variabel lists tadi ke dalam array $callback dengan index array : list_kota
            // $callback1 = array('list_harga' => $lists1); // Masukan variabel lists tadi ke dalam array $callback dengan index array : list_kota
            echo json_encode($callback); // konversi varibael $callback menjadi JSON
        } else {
            echo false;
        }
    }

    public function list_kota()
    {
        // Ambil data ID Provinsi yang dikirim via ajax post
        $codecupang = $this->input->post('codecupang');
        $kota = $this->M_transaksi->get_list_kota($codecupang);
        $harga = $this->M_transaksi->get_list_kota($codecupang);
        $test = $this->db->query("SELECT * FROM tbl_cupang WHERE codecupang = '$codecupang'")->row_array();
        // Buat variabel untuk menampung tag-tag option nya
        // Set defaultnya dengan tag option Pilih
        $lists = "<option value=''>--Please-Select---</option>";
        foreach ($kota as $data) {
            $lists .= "<option value='" . $data->cupangname . "'>" . $data->cupangname . " - " . $data->type . " - " . $data->warna . " - " . $data->size . " - " . $data->jeniskelamin ."</option>"; // Tambahkan tag option ke variabel $lists
        }
        // $lists1 = "<input type='number' value='" . $harga->price . "'>--Please-Select---</input>";
        // $lists1 = "<input type='number' value=''></input>";
        // foreach ($harga as $data) {
        //     $lists1 = "<input type='text' onkeyup='sum();' value='" . $data->price . "'>"; // Tambahkan tag option ke variabel $lists
        // }
        // foreach ($harga as $data) {
        //     $lists1 = $data->price; // Tambahkan tag option ke variabel $lists
        // }
        $lists1 = "<option value=''>--Please-Select Harga---</option>";
        foreach ($harga as $data) {
            $lists1 .= "<option value='" . $data->price . "'>" . $data->price . "</option>"; // Tambahkan tag option ke variabel $lists
        }
        $callback = array(
            'list_kota' => $lists,
            'list_harga' => $lists1
        ); // Masukan variabel lists tadi ke dalam array $callback dengan index array : list_kota
        // $callback1 = array('list_harga' => $lists1); // Masukan variabel lists tadi ke dalam array $callback dengan index array : list_kota
        echo json_encode($callback); // konversi varibael $callback menjadi JSON
    }

    public function list_harga()
    {
        // Ambil data ID Provinsi yang dikirim via ajax post
        $cupangname = $this->input->post('cupangname');
        $harga = $this->M_transaksi->get_list_harga($cupangname);
        // $harga = $this->M_transaksi->get_list_kota($codecupang);

        // Buat variabel untuk menampung tag-tag option nya
        // Set defaultnya dengan tag option Pilih
        $lists = "<option value=''>--Please-Select---</option>";
        foreach ($harga as $data) {
            $lists .= "<option value='" . $data->price . "'>" . $data->price . "</option>"; // Tambahkan tag option ke variabel $lists
        }
        // $lists1 = "<option value=''>--Please-Select Harga---</option>";
        // foreach ($harga as $data) {
        //     $lists1 .= "<option value='" . $data->price . "'>" . $data->price . "</option>"; // Tambahkan tag option ke variabel $lists
        // }
        $callback = array('list_harga' => $lists); // Masukan variabel lists tadi ke dalam array $callback dengan index array : list_kota
        echo json_encode($callback); // konversi varibael $callback menjadi JSON
    }

    // function select_cupang()
    // {
    //     $data1['Cupang'] = $this->M_transaksi->getNamacupang();
    //     $this->load->view('pages/transaksi/v_indextransaksi', $data1);
    // }

    function pdf1()
    {
        $pdf = new FPDF('l', 'mm', 'A5');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial', 'B', 16);
        // mencetak string 
        $pdf->Cell(190, 7, 'IKAN CUPANG APLIKASI', 0, 1, 'C');
        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(190, 7, 'DAFTAR TRANSAKSI APLIKASI CUPANG LIVE', 0, 1, 'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10, 7, '', 0, 1);
        $pdf->SetFont('Arial', 'B', 10);
        $pdf->Cell(20, 6, 'NOMOR', 1, 0);
        $pdf->Cell(85, 6, 'ID CUSTOMER', 1, 0);
        $pdf->Cell(27, 6, 'ID FARM', 1, 0);
        $pdf->Cell(25, 6, 'ID SALES', 1, 1);
        $pdf->SetFont('Arial', '', 10);

        // $mahasiswa = $this->M_transaksi->getData();
        $mahasiswa = $this->db->get('m_transaksi')->result();
        foreach ($mahasiswa as $row) {
            $pdf->Cell(20, 6, $row->nomor, 1, 0);
            $pdf->Cell(85, 6, $row->idcustomer, 1, 0);
            $pdf->Cell(27, 6, $row->idfarm, 1, 0);
            $pdf->Cell(25, 6, $row->idsales, 1, 1);
        }
        $pdf->Output();
    }

    public function pdf($id)
    {
        $dispo = $this->M_transaksi->getData($id)->row_array();
        $dispolan = $this->M_transaksi->getDatalanjut($id)->result_array();
        $test = $this->db->query("SELECT sum(total) as total FROM m_detailtransaksi where idtransaksi = '$id'")->row_array();
        // $dispolan1 = $this->M_transaksi->getDatalanjut1($id);
        $data = array(
            'dispo' => $dispo,
            'dispolan' => $dispolan,
            'test' => $test['total'],
            'id' => $id
            // 'dispolan1' => $dispolan1
        );
        // print_r($data);
        $this->load->library('pdf');
        $this->pdf->setPaper('A7', 'portrait');
        $this->pdf->filename = 'format/contoh1.pdf';
        $this->pdf->load_view('pages/transaksi/contoh.php', $data);
        // $this->load->view('pages/transaksi/contoh', $data);
    }

    public function changestatus()
    {
        $cek = $this->db->query("SELECT * FROM m_transaksi where id='" . $this->input->post('idtransaksi') . "'");
        if ($cek->num_rows() == 0) {
            $this->session->set_flashdata("danger", "data tidak ditemukan!!".$this->input->post('idtransaksi'));
        } else {
            $data = array(
                'tanggallunas' => ($this->input->post('status') == 'Pending')?null:$this->input->post('tanggallunas'),
                'status' => $this->input->post('estatus'),
                'carabayar' => ($this->input->post('status') == 'Pending')?null:$this->input->post('carabayar')
            );

            $where = array(
                'id' => $this->input->post('idtransaksi')
            );

            $this->M_transaksi->update('m_transaksi', $where, $data);
            $this->session->set_flashdata('success', 'Updated Data');
        }
        redirect('transaksi');
    }

    public function store()
    {
        $cek = $this->db->query("SELECT * FROM m_transaksi where nomor='" . $this->input->post('nomor') . "'");
        if ($cek->num_rows() >= 1) {
            $this->session->set_flashdata("danger", "Nomor yang anda input sudah ada!!");
        } else {
            $data = array(
                'tanggalpengajuan' => $this->input->post('tanggalpengajuan'),
                'tanggallunas' => $this->input->post('tanggallunas'),
                'nomor' => $this->input->post('nomor'),
                'idcustomer' => $this->input->post('cust'),
                'idfarm' => $this->input->post('farm'),
                'idsales' => $this->input->post('sales'),
                'idsource' => $this->input->post('source'),
                'status' => $this->input->post('status'),
                'carabayar' => $this->input->post('carabayar'),
                'ongkir' => $this->input->post('ongkir'),
                'packing' => $this->input->post('packing'),
                'catatan' => $this->input->post('note'),
                'dateadd' => date("Y-m-d H:i:s")
            );

            $lastid = $this->M_transaksi->store('m_transaksi', $data);
            // print_r($data);
            for ($i = 0; $i < count($_POST['cupang_name']); $i++) {
                $nama = explode(" - ",$_POST['cupang_name'][$i])[0];
                $dataloop = array(
                    'codecupang' => $_POST['codecupang'][$i],
                    'cupang_name' => $nama,
                    'harga' =>  $_POST['harga'][$i],
                    'qty' =>  $_POST['qty'][$i],
                    'total' =>  $_POST['total'][$i],
                    'idtransaksi' => $lastid
                );
                // print_r($dataloop);

                $this->M_transaksi->store('m_detailtransaksi', $dataloop);
                // var_dump($dataloop);
            }

            $this->session->set_flashdata('success', 'Stored Data');
            redirect('transaksi');
        }
        redirect('transaksi');
    }

    public function edit($id)
    {

        $where = array('id' => $id);
        $where1 = array('idtransaksi' => $id);
        // $dispo['dispo'] = $this->M_transaksi->getData($id)->row_array();
        // $dispolan['dispolan'] = $this->M_transaksi->getDatalanjut($id);
        $data['sales'] = $this->M_transaksi->getSales();
        $data['customer'] = $this->M_transaksi->getCustomer();
        $data['farm'] = $this->M_transaksi->getFarm();
        $data['source'] = $this->M_transaksi->getSource();
        $data['ikan'] = $this->M_transaksi->getCupang();
        $data['data'] = $this->M_transaksi->edit_data($where, 'm_transaksi')->result();
        $data['datakedua'] = $this->M_transaksi->edit_data($where1, 'm_detailtransaksi')->result();
        $this->load->view('pages/transaksi/editdata', $data);
    }

    public function update()
    {
        $data = array(
            'nomor' => $this->input->post('nomor'),
            'idcustomer' => $this->input->post('cust'),
            'idfarm' => $this->input->post('farm'),
            'idsales' => $this->input->post('sales'),
            'idsource' => $this->input->post('source'),
            'status' => $this->input->post('status'),
            'catatan' => $this->input->post('note'),
            'dateadd' => date("Y-m-d H:i:s")
        );

        $where = array(
            'id' => $this->input->post('id_transaksi')
        );

        $this->M_transaksi->update('m_transaksi', $where, $data);

        $this->db->delete('m_detailtransaksi')->where('id', $this->input->post('id_transaksi'));
        for ($i = 0; $i < count($_POST['cupang']); $i++) {
            $dataloop = array(
                'idcupang' => $_POST['idcupang'][$i],
                'harga' =>  $_POST['harga'][$i],
                'qty' =>  $_POST['qty'][$i],
                'idtransaksi' => $this->input->post('id_transaksi')
            );
            $this->M_transaksi->store('m_detailtransaksi', $dataloop);
        }

        $this->session->set_flashdata('success', 'Updated Data');

        redirect('transaksi');
    }

    function cp()
    {
        $request = $_POST['request']; // request
        if ($request == 1) {
            $search = $_POST['search'];
            $q1 = $this->db->query("SELECT * FROM tbl_cupang WHERE codecupang LIKE '%" . $search . "%' OR cupangname LIKE '%" . $search . "%'");

            foreach ($q1->result() as $r1) {
                $response[] = array("value" => $r1->idcupang, "label" => $r1->cupangname);
            }
            echo json_encode($response);
            exit;
        }

        if ($request == 2) {
            $kodeid = $_POST['kodeid'];
            $q2 = $this->db->query("SELECT * FROM tbl_cupang WHERE idcupang='" . $kodeid . "'");

            $users_arr = array();

            foreach ($q2->result() as $r2) {
                $kodeid = $r2->idcupang;
                $code = $r2->codecupang;
                $desc = $r2->cupangname;
                $price = $r2->price;

                $users_arr[] = array("id" => $kodeid, "code" => $code, "description" => $desc, "price" => $price);
            }

            // encoding array to json format
            echo json_encode($users_arr);
            exit;
        }
    }
    
    function deletetransaksi($id) {
        $where = array('id' => $id);
        $where1 = array('idtransaksi' => $id);
        $this->db->delete('m_transaksi', $where);
        $this->db->delete('m_detailtransaksi', $where1);
        $this->session->set_flashdata('success', 'Deleted Data');
        redirect('transaksi');
    }
}
