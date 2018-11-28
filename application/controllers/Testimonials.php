<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Testimonials extends Frontend_Controller {

	public function __construct(){
        parent::__construct();
        //$this->load->helper("url");
        $this->load->helper('form');
        $this->load->model('Testimonials_Model');
        $this->load->library('pagination');

    }

    public function all(){


        $config['base_url'] 	  = 'http://msci.swissmedicacrm.com/Testimonials/all';
		
        $config['total_rows']     = $this->Testimonials_Model->broj_redova();
		$config['per_page'] 	  = 5;
		
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
		
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        
		$data['all'] = $this->Testimonials_Model->dohvati_sve2($config["per_page"], $page); 

		$data['pagination'] = $this->pagination->create_links();
        $data['testimonials'] = $this->Testimonials_Model->dohvati_sve();
        $this->load_view('testimonials', $data);
    }

    public function testimonial(){
        
        $id = $this->uri->segment(3);
        $data['mojid'] = $this->uri->segment(3);
        $data['video'] = $this->Testimonials_Model->dohvati_jedan($id);
        $data['testimonials'] = $this->Testimonials_Model->dohvati_sve();
 
        $data['next'] = $this->Testimonials_Model->dohvati_sledeci($id);

        $data['active'] = "class='active'";
        $this->load_view('testimonial', $data);
    }
}