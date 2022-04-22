<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_galeri extends CI_Controller {

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
		$data['title']  = 'SIASMI - Admin | Galeri';
		$data['galeri'] = $this->Galeri_model->getAll();
		$this->View_model->admin('galeri/index', $data);
	}

    public function tambah()
	{
		$this->form_validation->set_rules('judul', 'Judul', 'required|trim');

		if ($this->form_validation->run() == false) {
			$data['title'] = 'SIASMI - Admin | Tambah Galeri';
			$this->View_model->admin('galeri/tambah', $data);
		} else {
			$this->Galeri_model->tambah();
			$this->session->set_flashdata('notification', 'ditambakan');
			redirect('admin_galeri');
		}
	}

	public function ubah($id)
	{
		$this->form_validation->set_rules('judul', 'Judul', 'required|trim');

		if ($this->form_validation->run() == false) {
			$data['title']  = 'SIASMI - Admin | Ubah Galeri';
			$data['galeri'] = $this->Galeri_model->getById($id);
			$this->View_model->admin('galeri/ubah', $data);
		} else {
			$this->Galeri_model->ubah($id);
			$this->session->set_flashdata('notification', 'diubah');
			redirect('admin_galeri');
		}
	}

	public function hapus($id)
	{
		$this->Galeri_model->hapus($id);
		$this->session->set_flashdata('notification', 'dihapus');
		redirect('admin_galeri');
	}
}
