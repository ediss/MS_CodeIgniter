<?php

defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );




class Locations_Model extends CI_Model{

	

	public function __construct() {

		parent::__construct ();

    }
    //$query = $this->db->get_where('mytable', array('id' => $id), $limit, $offset);
    
    public function galerija($limit,$start, $page){
        $this->db->limit($limit,$start);
        $rez=  $this->db->get_where('ms_galerija',array('page'=>$page));
        if($rez->num_rows()>0){
            return $rez->result();
        }
        else{
            return false;
        }
    }
}//POGLEDAJ U DENTA CARE KAKO IZGLEWDA TABELA GALERIJA, NAPRAVI IDENTICNU!