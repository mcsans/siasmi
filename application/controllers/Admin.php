<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
		redirect('admin/login');
	}

    public function login()
	{
        if( $this->session->userdata('id') == 1 ) { redirect('admin_dashboard'); }
		$this->Auth_model->login();
	}

    public function logout()
	{
		$this->Auth_model->logout();
		redirect('admin/login');
	}
}
