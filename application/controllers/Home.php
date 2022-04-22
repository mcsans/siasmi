<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if( $this->session->userdata('id') == 1 ) {
			redirect('admin_dashboard'); 
		}
	}

	public function index()
	{
		$data['title']	= 'Home';
		$data['ukm'] = $this->Ukm_model->getAll();
		$data['berita'] = $this->Berita_model->getAll();
		$data['section'] = $this->Section_model->getAll();
		$data['tentang'] = $this->Section_model->getBySection('Tentang');
		$data['visi'] = $this->Section_model->getBySection('Visi');
		$data['misi'] = $this->Section_model->getBySection('Misi');
		$data['jurusan'] = $this->Section_model->getBySection('Jurusan');
		$this->View_model->user('home/index', $data);
	}

	public function berita($id)
	{
		$data['title']	= 'Berita';
		$data['berita'] = $this->Berita_model->getById($id);
		$this->View_model->user('berita/detail', $data);
	}
}
