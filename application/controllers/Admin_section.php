<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_section extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if( !$this->session->userdata('id') ) {
			$this->session->set_flashdata('failed', 'Kamu belum login');
			redirect('admin/login'); 
		}
	}

	public function index()
	{
		$data['title']	= 'SIASMI - Admin | Section';
		$data['section']	= $this->Section_model->getAll();
		$this->View_model->admin('section/index', $data);
	}

	public function ubah($section)
	{
		$this->form_validation->set_rules('isi', 'Isi Section', 'required');

		if ($this->form_validation->run() == false) {
			$data['title']  = 'SIASMI - Admin | Ubah Section';
			$data['section'] = $this->Section_model->getBySection($section);
			$this->View_model->admin('section/ubah', $data);
		} else {
			$this->Section_model->ubah($section);
			$this->session->set_flashdata('notification', 'diubah');
			redirect('admin_section');
		}
	}
}
