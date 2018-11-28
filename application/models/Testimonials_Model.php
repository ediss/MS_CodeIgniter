<?php

defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );




class Testimonials_Model extends CI_Model{

	

	public function __construct() {

		parent::__construct ();

    }

    public function broj_redova(){
       $query = $this->db->count_all('ms_videos');
       return $query;
    }


    public function dohvati_sve2($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get("ms_videos");

        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
   }


    public function dohvati_sve(){
    
        $query = $this->db->get('ms_videos');
        $res=$query->result();
        return $res;

    }

    public function dohvati_jedan($id){

        $this->db->select('*');
        $this->db->from('ms_videos');
        $this->db->where('id_video',$id);
        //$query=$this->db->get()->result();
        $query=$this->db->get()->row();
        //$row = $query->next_row(‘array’);
        return $query;

        
        
    }

    public function dohvati_sledeci($id){
        $this->db->select('*');
        $this->db->from('ms_videos');
        $this->db->where('id_video >',$id, 1);

        $query=$this->db->get()->row();
        if($query == NULL){
            $query == $id;
        }

        return $query;

    }

}
