<?php

class Users_model extends CI_Model {

    public function getAll()
	{
		return $this->db->get('t_admin')->result_array();
	}

	public function getById($id)
	{
		return $this->db->get_where('t_admin', ['id' => $id])->row_array();
	}

	public function tambah()
	{
		// 
	}

	public function ubah()
	{
		$data = [
			'nama'         => htmlspecialchars($this->input->post('nama', true)),
			'email'         => htmlspecialchars($this->input->post('email', true)),
			'password'      => htmlspecialchars($this->input->post('password', true))
		];

		$this->db->where('id', $this->input->post('id'));
		$this->db->update('t_admin', $data);
	}

	public function hapus($id)
	{
		// 
	}
}
