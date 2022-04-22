<?php

class Section_model extends CI_Model {

    public function getAll()
	{
		return $this->db->get('t_section')->result_array();
	}

    public function getBySection($section)
	{
		return $this->db->get_where('t_section', ['section' => $section])->row_array();
	}

    public function ubah($id)
	{
		$picture = $_FILES['gambar']['name'];
			
		if( $picture == '' ) {
			$picture = $this->input->post('img');
		} else {
			$config['upload_path']          = 'assets/img/section';
			$config['allowed_types']        = 'jpg|jpeg|png|JPG|JPEG|PNG';

			$this->load->library('upload', $config);

			if ( !$this->upload->do_upload('gambar')) {} else {
				$picture = $this->upload->data('file_name');
			}
		}

		$data = [
			'gambar'	=> $picture,
            'isi'		=> $this->input->post('isi', true)
		];

		$this->db->where('section', $this->input->post('section'));
		$this->db->update('t_section', $data);
	}
}
