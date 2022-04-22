<?php

class Ukm_model extends CI_Model {

    public function getAll()
	{
		return $this->db->get('t_ukm')->result_array();
	}
    public function getById($id)
	{
		return $this->db->get_where('t_ukm', ['id' => $id])->row_array();
	}
    public function tambah()
	{
		$picture = $_FILES['gambar']['name'];
			
		if( $picture == '' ) {
			$picture = 'default.jpg';
		} else {
			$config['upload_path']          = 'assets/img/ukm';
			$config['allowed_types']        = 'jpg|jpeg|png|JPG|JPEG|PNG';

			$this->load->library('upload', $config);

			if ( !$this->upload->do_upload('gambar')) {} else {
				$data = [
                    'nama'     => htmlspecialchars($this->input->post('nama', true)),
                    'gambar'    => $this->upload->data('file_name')
                ];
        
                $this->db->insert('t_ukm', $data);
			}
		}
	}
    
    public function ubah($id)
	{
		$picture = $_FILES['gambar']['name'];
			
		if( $picture == '' ) {
			$picture = $this->input->post('gambar');
		} else {
			$config['upload_path']          = 'assets/img/ukm';
			$config['allowed_types']        = 'jpg|jpeg|png|JPG|JPEG|PNG';

			$this->load->library('upload', $config);

			if ( !$this->upload->do_upload('gambar')) {} else {
				$picture = $this->upload->data('file_name');
			}
		}

		$data = [
			'nama'      => htmlspecialchars($this->input->post('nama', true)),
			'gambar'    => $picture
		];

		$this->db->where('id', $this->input->post('id'));
		$this->db->update('t_ukm', $data);
	}

	public function hapus($id)
	{
		$this->db->delete('t_ukm', ['id' => $id]);
	}


}
