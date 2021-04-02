<?php
class M_dashboard extends CI_Model {
    
    public function index($table)
    {
        return $this->db->get($table);
    }

    public function index_active($table)
    {
        return $this->db->where('status','1')->get($table);
    }

    public function index_deactive($table)
    {
        return $this->db->where('status','0')->get($table);
    }
}
?>