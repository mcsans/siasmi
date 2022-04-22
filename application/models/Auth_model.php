<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_model extends CI_Model {

	public function login()
	{
		$this->form_validation->set_rules('email', 'Email', 'required|trim');
		$this->form_validation->set_rules('password', 'Password', 'required|trim');

        // Jika form validasi tidak terpenuhi maka :
		if( $this->form_validation->run() == false )  {
			$data['title'] = 'SIASMI - Admin | Login';
			$this->load->view('auth/login', $data);
		} 
        // Jika form validasi terpenuhi maka :
        else {
			$this->_login();
		}
	}

	private function _login()
	{
        // mengambil email dan password dari inputan user
		$email 	  = htmlspecialchars($this->input->post('email'));
		$password = htmlspecialchars($this->input->post('password'));

        // memanggil user berdasarkan email dari inputan, untuk memeriksa apa email terdaftar atau tidak
		$user = $this->db->get_where('t_admin', ['email' => $email])->row_array();
		
        // jika user tidak ditemukan / pemanggilan diatas tidak membuahkan hasil maka :
		if( !$user ) {
			$this->session->set_flashdata('failed', 'Email Tidak Terdaftar');
			redirect('admin/login');
		} 
        // jika pemanggilan mengembalikan data user maka :
        else {
            // pemeriksaan password dari inputan disandingkan dengan password dari $user
            if( $password != $user['password'] ) {
                $this->session->set_flashdata('failed', 'Password Salah');
                redirect('admin/login');	
            } else {
                // membuat session
                $data = [
                    'id'      => $user['id']
                ];

                $this->session->set_userdata($data);
                redirect('admin_dashboard');
            }
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('id');
		$this->session->set_flashdata('success', 'Berhasil Logout');
	}
}
