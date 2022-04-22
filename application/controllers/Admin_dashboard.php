<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_dashboard extends CI_Controller {

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
		$data['title'] = 'SIASMI - Admin | Dashboard';
		$data['dashboard'] = $this->Dashboard_model->getDashboard();
		$this->View_model->admin('dashboard/index', $data);
	}
}
