<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_berita extends CI_Controller {

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
		$data['title']	= 'SIASMI - Admin | Berita';
		$data['berita']	= $this->Berita_model->getAll();
		$data['dashboard'] = $this->Dashboard_model->getDashboard();
		$this->View_model->admin('berita/index', $data);
	}

    public function tambah()
	{
		$this->form_validation->set_rules('judul', 'Judul', 'required|trim');
		$this->form_validation->set_rules('isi', 'Isi Berita', 'required');

		if ($this->form_validation->run() == false) {
			$data['title'] = 'SIASMI - Admin | Tambah Berita';
			$this->View_model->admin('berita/tambah', $data);
		} else {
			$this->Berita_model->tambah();
			$this->session->set_flashdata('notification', 'ditambakan');
			redirect('admin_berita');
		}
	}

	public function ubah($id)
	{
		$this->form_validation->set_rules('judul', 'Judul', 'required|trim');
		$this->form_validation->set_rules('isi', 'Isi Berita', 'required');

		if ($this->form_validation->run() == false) {
			$data['title']  = 'SIASMI - Admin | Ubah Berita';
			$data['berita'] = $this->Berita_model->getById($id);
			$this->View_model->admin('berita/ubah', $data);
		} else {
			$this->Berita_model->ubah($id);
			$this->session->set_flashdata('notification', 'diubah');
			redirect('admin_berita');
		}
	}

	public function hapus($id)
	{
		$this->Berita_model->hapus($id);
		$this->session->set_flashdata('notification', 'dihapus');
		redirect('admin_berita');
	}
}
