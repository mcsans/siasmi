<?php

class View_model extends CI_Model {

    public function admin($view, $data)
    {
        $this->load->view('templates/admin/header', $data);
		$this->load->view('templates/admin/sidebar');
		$this->load->view('templates/admin/navbar');
		$this->load->view('admin/'. $view,$data);
		$this->load->view('templates/admin/footer');
    }

    public function user($view, $data)
    {
        $this->load->view('templates/user/header', $data);
		$this->load->view('user/'. $view,$data);
		$this->load->view('templates/user/footer');
    }
}
