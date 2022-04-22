<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_users extends CI_Controller {

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
		$data['title']	= 'SIASMI - Admin | Users';
		$data['users']	= $this->Users_model->getAll();
		$this->View_model->admin('users/index', $data);
	}

	public function ubah($id)
	{
		$this->form_validation->set_rules('nama', 'Nama', 'required|trim');
		$this->form_validation->set_rules('email', 'Email', 'required|trim');
		$this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[5]');

		if ($this->form_validation->run() == false) {
			$data['title']  = 'SIASMI - Admin | Ubah Data Admin';
			$data['users'] = $this->Users_model->getById($id);
			$this->View_model->admin('users/ubah', $data);
		} else {
			$this->Users_model->ubah($id);
			$this->session->set_flashdata('notification', 'diubah');
			redirect('admin_users');
		}
	}
}
