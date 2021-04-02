<?php
class Logout extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		date_default_timezone_set("Asia/Jakarta");
	}
    public function logout()
	{
	    $this->session->sess_destroy();
	    return redirect('login');
	}
}
?>