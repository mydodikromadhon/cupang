<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Source extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_source');
	}
	public function index()
    {

        $template = array(
            'main' => 'pages/source/v_indexsource',
            'data' => $this->M_source->index('m_source')->result(),
        );
        $this->load->view('pages/layouts', $template);
    }

	public function store()
	{
		$name = $this->input->post('name');
		$note = $this->input->post('note');

		$data = array(
		'name'=>$name,
		'note'=>$note,
		 );
		$this->M_source->store('m_source',$data);

		$this->session->set_flashdata('success','Stored Data');

		redirect('source');
	}

	public function update()
	{
		$id = $this->input->post('id');
		$name = $this->input->post('name');
		$note = $this->input->post('note');

		$data = array(
		'name'=>$name,
		'note'=>$note,
		);

		$where = array(
			'id'=>$id
		);

		$this->M_source->update('m_source',$where,$data);

		$this->session->set_flashdata('success','Updated Data');

		redirect('source');


	}
}
