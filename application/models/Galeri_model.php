<?php

class Galeri_model extends CI_Model {

    public function getAll()
	{
		return $this->db->get('t_galeri')->result_array();
	}

	public function getById($id)
	{
		return $this->db->get_where('t_galeri', ['id' => $id])->row_array();
	}

	public function tambah()
	{
		$picture = $_FILES['gambar']['name'];
			
		if( $picture == '' ) {
			$picture = 'default.jpg';
		} else {
			$config['upload_path']          = 'assets/img/galeri';
			$config['allowed_types']        = 'jpg|jpeg|png|JPG|JPEG|PNG';

			$this->load->library('upload', $config);

			if ( !$this->upload->do_upload('gambar')) {} else {
				$data = [
                    'judul'     => htmlspecialchars($this->input->post('judul', true)),
                    'gambar'    => $this->upload->data('file_name')
                ];
        
                $this->db->insert('t_galeri', $data);
			}
		}
	}

	public function ubah($id)
	{
		$picture = $_FILES['gambar']['name'];
			
		if( $picture == '' ) {
			$picture = $this->input->post('img');
		} else {
			$config['upload_path']          = 'assets/img/galeri';
			$config['allowed_types']        = 'jpg|jpeg|png|JPG|JPEG|PNG';

			$this->load->library('upload', $config);

			if ( !$this->upload->do_upload('gambar')) {} else {
				$picture = $this->upload->data('file_name');
			}
		}

		$data = [
			'judul'      => htmlspecialchars($this->input->post('judul', true)),
			'gambar'    => $picture
		];

		$this->db->where('id', $this->input->post('id'));
		$this->db->update('t_galeri', $data);
	}

	public function hapus($id)
	{
		$this->db->delete('t_galeri', ['id' => $id]);
	}
}
