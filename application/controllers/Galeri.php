<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galeri extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if( $this->session->userdata('id') == 1 ) {
			redirect('admin_dashboard'); 
		}
	}

	public function index()
	{
		$data['title']	= 'Galeri';
		$data['galeri'] = $this->Galeri_model->getAll();
		$this->View_model->user('galeri/index', $data);
	}
}
