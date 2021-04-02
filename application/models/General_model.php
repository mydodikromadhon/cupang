<?php defined('BASEPATH') or exit('No direct script access allowed');

class General_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}


	public function generate()
	{
		$last_row = $this->db->where('dateadd', date('Ymd'))->get('m_transaksi')->num_rows();
		// $last_row = $this->db->query("SELECT MAX(nomor) FROM m_transaksi where dateadd like '%'");
		$last_row = $last_row > 0 ? $last_row : 1;

		$last_no = str_pad($last_row, 4, 0, STR_PAD_LEFT);
		return date('Ymd') . $last_no;
	}

	// Generate Autonumber according to the type of the transaction
	public function generateAutoNumber($transaction_type)
	{
		$table = "";
		$field = "";

		switch ($transaction_type) {
			case "nomor":
				$field = "nomor";
				$table = "m_transaksi";
				break;
		}
		$current_year = date('Y');
		$current_month = date('m');
		$current_date = date('d');
		// $userid = $this->session->userdata('user_id');

		$trans_numbers = $current_year . $current_month . $current_date;
		$trans_number = $current_year . $current_month . $current_date;

		$this->db->select_max($field);
		$this->db->from($table);
		$this->db->like($field, $trans_number);
		$this->db->having('count(*) > 0');
		// $this->db->where($trans_numbers);

		$query = $this->db->get();

		$counter = "0001";

		if ($query->num_rows() > 0) {
			$trans_number = $query->row()->$field;
			$trans_number = substr($trans_number, -4);
			++$trans_number;
		} else {
			$trans_number = $counter;
		}

		return $trans_numbers . str_pad($trans_number, 4, "0", STR_PAD_LEFT);
	}

	public function generateAutoNumber1($transaction_type)
	{
		$initial = "";
		$table = "";
		$field = "";
		$table1 = "";
		$field1 = "";

		switch ($transaction_type) {
			case "no_urut":
				$initial = "";
				$field = "category_code";
				$table = "category";
				break;
		}
		$category_code = $this->input->post('category');
		$sub_category_code = $this->input->post('sub_category');
		$sub_category_code1 = $this->input->post('sub_category1');
		// $userid = $this->session->userdata('user_id');

		$trans_numbers = $initial . $category_code . $sub_category_code . $sub_category_code1;
		$trans_number = $sub_category_code . $sub_category_code1;

		$this->db->select_max($field);
		$this->db->from($table);
		$this->db->like($field, $trans_number);
		$this->db->having('count(*) > 0');
		$query = $this->db->get();

		$counter = "0001";

		if ($query->num_rows() > 0) {
			$trans_number = $query->row()->$field;
			$trans_number = substr($trans_number, -4);
		} else {
			$trans_number = $counter;
		}

		return $trans_numbers . str_pad($trans_number, 4, "0", STR_PAD_LEFT);
	}
}
