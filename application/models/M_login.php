<?php
class M_login extends CI_Model {
    
    public function store($table,$where)
    {
             $this->db->where($where);
     $user = $this->db->get($table)->first_row();

     if($user != null){
          return array(
            'fname' => $user->fname,
            'lname' => $user->lname,
            'email'     => $user->email,
            'password'  => $user->password,
            'position'    => $user->position,
            'iduser'  => $user->iduser,
            'status'   => $user->status
        );
    
      }else{
        $this->session->set_flashdata('error','Incorrect username or password');
        redirect('login');
      }
      
    }
}
?>