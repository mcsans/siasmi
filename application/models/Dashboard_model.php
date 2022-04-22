<?php

class Dashboard_model extends CI_Model {

    public function getDashboard()
	{
        $dashboard = [
            $section = $this->db->get('t_section')->num_rows(),
            $berita = $this->db->get('t_berita')->num_rows(),
            $galeri = $this->db->get('t_galeri')->num_rows(),
            $ukm = $this->db->get('t_ukm')->num_rows()
        ];

		return $dashboard;
	}
}
