<?php

defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );




class About_MS_Model extends CI_Model{

	

	public function __construct() {

		parent::__construct ();

    }
    
    public function dohvati_sve(){

        $query = $this->db->get('ms_news');

        $row=$query->result();

		return $row;
    }

    public function dohvati_jedan($id){

        $this->db->select('*');
        $this->db->from('ms_about_ms');
        $this->db->where('page_id',$id);
        //$query=$this->db->get()->result();
        $query=$this->db->get()->row();
        return $query;
    }
}
