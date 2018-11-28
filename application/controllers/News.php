<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends Frontend_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->library('pagination');
        $this->load->helper('form');
        $this->load->model('News_Model');
    }

    public function all(){


        /*START PAGINATION*/
        $config['base_url'] 	  = 'http://msci.swissmedicacrm.com/News/all';
                
        $config['total_rows']     = $this->News_Model->broj_redova();//$this->db->count_all('ms_galerija');
        $config['per_page'] 	  = 3;
        

        $choice 				  = $config["total_rows"] / $config["per_page"];
        $config["num_links"] 	  = floor($choice);

        $config['full_tag_open']  = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';

        $config['first_link'] 	  = false;
        $config['last_link'] 	  = false;

        $config['first_tag_open']  = '<li>';
        $config['first_tag_close'] = '</li>';

        $config['prev_link'] 	   = '&laquo';
        $config['prev_tag_open']   = '<li class="prev">';
        $config['prev_tag_close']  = '</li>';
        
        $config['next_link']      = '&raquo';
        $config['next_tag_open']  = '<li>';
        $config['next_tag_close'] = '</li>';

        $config['last_tag_open']  = '<li>';
        $config['last_tag_close'] = '</li>';

        $config['cur_tag_open']   = '<li class="active pagination-link"><a href="#">';
        $config['cur_tag_close']  = '</a></li>';

        $config['num_tag_open']   = '<li>';
        $config['num_tag_close']  = '</li>';
        
        $this->pagination->initialize($config);
        
        //var_dump($config['per_page']);
        
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        
        // var_dump($data['page']);

        
        //$data['deptlist'] = $this->News_Model->dohvati_slike($config["per_page"], $data['page']); 
        $data['all'] = $this->News_Model->dohvati_sve2($config["per_page"], $data['page']);
        $data['all_news'] = $this->News_Model->dohvati_sve();


        
        $data['pagination'] = $this->pagination->create_links();
        
        /*END OF PAGINATION*/
        
        ////

        $this->load_view('news', $data);
    }

    public function single_news(){
        $data['all'] = $this->News_Model->dohvati_sve();


        $id = $this->uri->segment(3);

        /*START PAGINATION*/
        $config['base_url'] 	  = 'http://msci.swissmedicacrm.com/News/single_news/'.$id;
		
		$config['total_rows']     = $this->db->where('page_id',$id)->from("ms_news_gallery")->count_all_results();//$this->db->count_all('ms_galerija');
        $config['per_page'] 	  = 6;
        

		$choice 				  = $config["total_rows"] / $config["per_page"];
		$config["num_links"] 	  = floor($choice);

		$config['full_tag_open']  = '<ul class="pagination">';
		$config['full_tag_close'] = '</ul>';

		$config['first_link'] 	  = false;
        $config['last_link'] 	  = false;

        $config['first_tag_open']  = '<li>';
        $config['first_tag_close'] = '</li>';

        $config['prev_link'] 	   = '&laquo';
        $config['prev_tag_open']   = '<li class="prev">';
        $config['prev_tag_close']  = '</li>';
		
		$config['next_link']      = '&raquo';
        $config['next_tag_open']  = '<li>';
        $config['next_tag_close'] = '</li>';

        $config['last_tag_open']  = '<li>';
        $config['last_tag_close'] = '</li>';

        $config['cur_tag_open']   = '<li class="active pagination-link"><a href="#">';
        $config['cur_tag_close']  = '</a></li>';

        $config['num_tag_open']   = '<li>';
        $config['num_tag_close']  = '</li>';
		
        $this->pagination->initialize($config);
        
    //var_dump($config['per_page']);
        
        $data['page'] = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
        
       // var_dump($data['page']);
   
        
		$data['deptlist'] = $this->News_Model->dohvati_slike($config["per_page"], $data['page'], $id); 
		
		$data['pagination'] = $this->pagination->create_links();
        
        /*END OF PAGINATION*/
        
        $linkovi ="<script type='text/javascript' src='http://msci.autismtreatment-europe.com/fancybox/lib/jquery-1.10.1.min.js'></script>
				   <script type='text/javascript' src='http://msci.autismtreatment-europe.com/fancybox/source/jquery.fancybox.js'></script>
				   <link rel='stylesheet' type='text/css' href='http://msci.autismtreatment-europe.com/fancybox/source/jquery.fancybox.css' media='screen' />";
        
        $data['links']=$linkovi;
        $data['mojid'] = $this->uri->segment(3);
        $data['active'] = "class='active'";
        $data['news'] = $this->News_Model->dohvati_jedan($id);

        $this->load_view('single_news', $data);
    }
}