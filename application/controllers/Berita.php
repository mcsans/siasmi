<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if( $this->session->userdata('id') == 1 ) {
			redirect('admin_dashboard'); 
		}
	}

	public function detail($id)
	{
		$data['title']	= 'Berita';
		$data['berita'] = $this->Berita_model->getById($id);
		$this->View_model->user('berita/detail', $data);
	}
}
