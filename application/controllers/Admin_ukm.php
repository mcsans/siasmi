<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_ukm extends CI_Controller {

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
		$data['title'] = 'SIASMI - Admin | UKM';
		$data['ukm'] = $this->Ukm_model->getAll();
		$this->View_model->admin('ukm/index', $data);
	}

    public function tambah()
	{
		$this->form_validation->set_rules('nama', 'Nama', 'required|trim');

		if ($this->form_validation->run() == false) {
			$data['title'] = 'SIASMI - Admin | Tambah UKM';
			$this->View_model->admin('ukm/tambah', $data);
		} else {
			$this->Ukm_model->tambah();
			$this->session->set_flashdata('notification', 'ditambakan');
			redirect('admin_ukm');
		}
	}

	public function ubah($id)
	{
		$this->form_validation->set_rules('nama', 'Nama', 'required|trim');

		if ($this->form_validation->run() == false) {
			$data['title']  = 'SIASMI - Admin | Ubah UKM';
			$data['ukm'] = $this->Ukm_model->getById($id);
			$this->View_model->admin('ukm/ubah', $data);
		} else {
			$this->Ukm_model->ubah($id);
			$this->session->set_flashdata('notification', 'diubah');
			redirect('admin_ukm');
		}
	}

	public function hapus($id)
	{
		$this->Ukm_model->hapus($id);
		$this->session->set_flashdata('notification', 'dihapus');
		redirect('admin_ukm');
	}
}
