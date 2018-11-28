<?php

defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );




class News_Model extends CI_Model{

	

	public function __construct() {

		parent::__construct ();

    }
    
    public function broj_redova(){
        $query = $this->db->count_all('ms_news');
        return $query;
    }

    public function dohvati_sve(){

        $query = $this->db->get('ms_news');

        $row=$query->result();

		return $row;
    }

    public function dohvati_sve2($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get("ms_news");

        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
   }
    public function dohvati_jedan($id){

        $this->db->select('*');
        $this->db->from('ms_news');
        //$this->db->where('id_news',$id);
        $this->db->where('id_page',$id);
        //$this->db->where('page_id',$id);
        //$query=$this->db->get()->result();
        $query=$this->db->get()->row();
        return $query;

    }

    public function dohvati_slike($limit,$start, $page){
        /*$this->db->select('*');
        $this->db->from('ms_news_gallery');
        $this->db>get_where('page_id',$id);
        //$this->db->where('page_id',$id);
        //$query=$this->db->get()->result();
        $row=$this->db->get()->result();
        return $row;*/
        
        
        $this->db->limit($limit,$start);
        $rez=  $this->db->get_where('ms_news_gallery',array('page_id'=>$page));
        if($rez->num_rows()>0){
            return $rez->result();
        }
        else{
            return false;
        }

    }
}
