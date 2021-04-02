<?php
class M_transaksi extends CI_Model
{

    public function index($table)
    {
        $this->db->select('m_transaksi.*,tbl_customer.companyname,tbl_spkto.nama,tbl_farm.farmname,m_source.note')
        ->join('tbl_customer', 'm_transaksi.idcustomer=tbl_customer.idcustomer', 'left')
        ->join('tbl_spkto', 'm_transaksi.idsales=tbl_spkto.id_spkto', 'left')
        ->join('m_source', 'm_transaksi.idsource=m_source.id', 'left')
        ->join('tbl_farm', 'm_transaksi.idfarm=tbl_farm.idfarm', 'left');
        $query = $this->db->get($table);
        return $query;
    }

    public function store($table, $data)
    {
        $this->db->insert($table, $data);
        $insert_id = $this->db->insert_id();
        return  $insert_id;
    }

    function edit_data($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function update($table, $where, $data)
    {
        $this->db->where($where)->update($table, $data);
    }

    public function index_show($table)
    {
        return $this->db->get($table);
    }

    public function index_active($table)
    {
        return $this->db->where('status', '1')->get($table);
    }
    function ListSales()
    {
        // $qd = $this->db->query("select idsales, salesname FROM tbl_sales");
        $qd = $this->db->query("select id_spkto, nama FROM tbl_spkto");

        if ($qd->num_rows() > 0) {
            foreach ($qd->result_array() as $kd) {
                $DtBranch[''] = "-- Nama Sales  ---";
                // $DtBranch[$kd['idsales']] = $kd['salesname'];
                $DtBranch[$kd['id_spkto']] = $kd['nama'];
            }
        } else {
            $DtBranch[0] = "--- Nama Sales ---";
        }
        return $DtBranch;
    }

    function ListCust()
    {
        $qd = $this->db->query("select idcustomer, companyname, phone FROM tbl_customer");

        if ($qd->num_rows() > 0) {
            foreach ($qd->result_array() as $kd) {
                $DtBranch[''] = "-- Nama Customer ---";
                $DtBranch[$kd['idcustomer']] = $kd['companyname'].' - '.$kd['phone'];
            }
        } else {
            $DtBranch[0] = "--- Nama Customer  ---";
        }
        return $DtBranch;
    }

    function ListCupang()
    {
        $qd = $this->db->query("select idcupang, codecupang FROM tbl_cupang");

        if ($qd->num_rows() > 0) {
            foreach ($qd->result_array() as $kd) {
                $DtBranch[''] = "-- Nama Customer ---";
                $DtBranch[$kd['idcupang']] = $kd['codecupang'];
            }
        } else {
            $DtBranch[0] = "--- Nama Cupang  ---";
        }
        return $DtBranch;
    }

    function get_list_kota($codecupang)
    {
        $this->db->select('*');
        $this->db->from('tbl_cupang');
        $this->db->where('codecupang', $codecupang);
        $result = $this->db->get()->result(); // Tampilkan semua data kota berdasarkan id provinsi
        return $result;
    }

    // function get_list_harga($cupang_name)
    // {
    //     $this->db->select('*');
    //     $this->db->from('tbl_cupang');
    //     $this->db->where('cupangname', $cupang_name);
    //     $result = $this->db->get()->result(); // Tampilkan semua data kota berdasarkan id provinsi
    //     return $result;
    // }

    // function getNamacupang()
    // {
    //     $codecupang = $this->input->post('codecupang');
    //     $result = array();
    //     $this->db->select('*');
    //     $this->db->from('tbl_cupang');
    //     // $this->db->where('codecupang', $codecupang);
    //     $this->db->order_by('cupangname', 'ASC');
    //     $array_keys_values = $this->db->get();
    //     foreach ($array_keys_values->result() as $row) {
    //         $result[0] = '-Pilih Kota / Kabupaten-';
    //         $result[$row->cupangname] = $row->cupangname;
    //     }

    //     return $result;
    // }

    public function getCupang()
    {
        $this->db->select('d.*')
            ->from('tbl_cupang d');
        return $this->db->get()->result();
    }

    public function getData1()
    {
        // $id = $this->input->post('id');
        $this->db->select('d.*')
            ->from('m_transaksi d');
        // ->where('id', $id);
        return $this->db->get()->result();
    }

    public function getData($id)
    {
        // $this->db->where('id', $id);
        // $result = $this->db->get('m_transaksi');
        // return $result;

        $this->db->select('m_transaksi.*, tbl_customer.companyname, tbl_farm.farmname,tbl_spkto.nama, m_source.note')
            ->from('m_transaksi')
            ->join('tbl_customer', 'tbl_customer.idcustomer = m_transaksi.idcustomer', 'left')
            ->join('tbl_farm', 'tbl_farm.idfarm = m_transaksi.idfarm', 'left')
            ->join('tbl_spkto', 'tbl_spkto.id_spkto = m_transaksi.idsales', 'left')
            ->join('m_source', 'm_source.id = m_transaksi.idsource', 'left')
            ->where('m_transaksi.id', $id);
        $data = $this->db->get();
        return $data;
    }
    public function getDatalanjut($id)
    {
        // $this->db->where('disposisi_id', $id);
        // $result = $this->db->get('disposisi_lanjutan');
        // return $result;

        $this->db->select('m_detailtransaksi.*')
            ->from('m_detailtransaksi')
            ->where('m_detailtransaksi.idtransaksi', $id);
        $data = $this->db->get();
        return $data;
    }
    // public function getDatalanjut1($id)
    // {

    //     $this->db->select('SUM(total) as grandtotal')
    //         ->from('m_detailtransaksi')
    //         // ->group_by('total')
    //         // ->order_by('grandtotal', 'desc')
    //         ->where('idtransaksi', $id);
    //     $data = $this->db->get()->row()->grandtotal;
    //     return $data;
    // }

    function ListFarm()
    {
        $qd = $this->db->query("select idfarm, farmname FROM tbl_farm");

        if ($qd->num_rows() > 0) {
            foreach ($qd->result_array() as $kd) {
                $DtBranch[''] = "-- Nama Farm  ---";
                $DtBranch[$kd['idfarm']] = $kd['farmname'];
            }
        } else {
            $DtBranch[0] = "------";
        }
        return $DtBranch;
    }

    function ListSource()
    {
        $qd = $this->db->query("select id, name FROM m_source");

        if ($qd->num_rows() > 0) {
            foreach ($qd->result_array() as $kd) {
                $DtBranch[''] = "-- Source  ---";
                $DtBranch[$kd['id']] = $kd['name'];
            }
        } else {
            $DtBranch[0] = "------";
        }
        return $DtBranch;
    }

    public function index_deactive($table)
    {
        return $this->db->where('status', '0')->get($table);
    }

    public function getSales()
    {
        return $this->db->get('tbl_sales')->result();
    }
    public function getCustomer()
    {
        return $this->db->get('tbl_customer')->result();
    }
    public function getFarm()
    {
        return $this->db->get('tbl_farm')->result();
    }
    public function getSource()
    {
        return $this->db->get('m_source')->result();
    }
}
