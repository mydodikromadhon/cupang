<?php
class M_monitoringmediarcm extends CI_Model
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
}
