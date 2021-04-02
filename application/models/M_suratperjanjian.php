<?php
class M_suratperjanjian extends CI_Model
{

    public function index($table)
    {
        return $this->db->get($table);
    }

    public function store($table, $data)
    {
        $this->db->insert($table, $data);
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

    public function index_deactive($table)
    {
        return $this->db->where('status', '0')->get($table);
    }
    public function indexJoin($table)
    {
        $this->db->select('tbl_suratperjanjian.*,m_invoice.*');
        $this->db->from($table);
        $this->db->join('m_invoice', 'tbl_suratperjanjian.id_suratperjanjian = m_invoice.idinvoice', 'left');
        return $this->db->get();
    }

    public function IndexWhere($table, $where)
    {
        return $this->db->where($where)->get($table);
    }
}
