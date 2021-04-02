<?php
class M_register extends CI_Model {
    
    public function store($table,$data)
    {
    	$this->db->insert($table,$data);
    	$insert_id = $this->db->insert_id();

    	$user = $this->db->where('iduser',$insert_id)->get($table)->first_row();

    	 return array(
            'fname' => $user->fname,
            'lname' => $user->lname,
            'email'     => $user->email,
            'password'  => $user->password,
            'position'    => $user->position,
            'iduser'  => $user->iduser,
            'status'   => $user->status
        );
    }
}
?>