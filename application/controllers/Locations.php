<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Locations extends Frontend_Controller {
	

	public function __construct(){
		parent::__construct();
		$data=array();
		
		$this->load->library('pagination');
		
		$this->load->model('Locations_Model');

	}

    
	public function switzerland()
	{
		$config['base_url'] 	  = 'http://msci.swissmedicacrm.com/Locations/switzerland';
		
		$config['total_rows']     = $this->db->where('page','switzerland')->from("ms_galerija")->count_all_results();//$this->db->count_all('ms_galerija');
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
		
		$page ="switzerland";
		$data['page'] = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;

		
		$data['deptlist'] = $this->Locations_Model->galerija($config["per_page"], $data['page'], $page); 
				
		$data['pagination'] = $this->pagination->create_links();

//////////////////////////////////////////////////////////////////////
		
		$linkovi ="<script type='text/javascript' src='http://msci.swissmedicacrm.com/fancybox/lib/jquery-1.10.1.min.js'></script>
				   <script type='text/javascript' src='http://msci.swissmedicacrm.com/fancybox/source/jquery.fancybox.js'></script>
				   <link rel='stylesheet' type='text/css' href='http://msci.swissmedicacrm.com/fancybox/source/jquery.fancybox.css' media='screen' />";
		$data['links']=$linkovi;
		$data['model']="neki tekst pa neki img src :<br/> <img src='http://msci.swissmedicacrm.com/images/38550147.jpg' alt='a' />";
		$this->load_view('locations/switzerland', $data);
  	}

    public function austria()
	{

	

		$config['base_url'] 	  = 'http://msci.swissmedicacrm.com/Locations/austria';
		
		$config['total_rows']     = $this->db->where('page','austria')->from("ms_galerija")->count_all_results();//$this->db->count_all('ms_galerija');
		$config['per_page'] 	  = 12;
		
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
		
		$page ="austria";
		$data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$data['deptlist'] = $this->Locations_Model->galerija($config["per_page"], $data['page'], $page); 
		
		$data['pagination'] = $this->pagination->create_links();

//////////////////////////////////////////////////////////////////////
		$linkovi ="<script type='text/javascript' src='http://msci.swissmedicacrm.com/fancybox/lib/jquery-1.10.1.min.js'></script>
				   <script type='text/javascript' src='http://msci.swissmedicacrm.com/fancybox/source/jquery.fancybox.js'></script>
		           <link rel='stylesheet' type='text/css' href='http://msci.swissmedicacrm.com/fancybox/source/jquery.fancybox.css' media='screen' />";
		$data['links']=$linkovi;
		$this->load_view('locations/austria', $data);
    }

    public function slovenia()
	{
		$config['base_url'] 	  = 'http://msci.swissmedicacrm.com/Locations/slovenia';
		
		$config['total_rows']     = $this->db->where('page','slovenia')->from("ms_galerija")->count_all_results();//$this->db->count_all('ms_galerija');
		$config['per_page'] 	  = 12;
		
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
		
		$page ="slovenia";
		$data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$data['deptlist'] = $this->Locations_Model->galerija($config["per_page"], $data['page'], $page); 
		
		$data['pagination'] = $this->pagination->create_links();

//////////////////////////////////////////////////////////////////////
		$linkovi ="<script type='text/javascript' src='http://msci.swissmedicacrm.com/fancybox/lib/jquery-1.10.1.min.js'></script>
				   <script type='text/javascript' src='http://msci.swissmedicacrm.com/fancybox/source/jquery.fancybox.js'></script>
				   <link rel='stylesheet' type='text/css' href='http://msci.swissmedicacrm.com/fancybox/source/jquery.fancybox.css' media='screen' />";
		$data['links']=$linkovi;
		$this->load_view('locations/slovenia', $data);
    }

    public function serbia()
	{
		$config['base_url'] 	  = 'http://msci.swissmedicacrm.com/Locations/serbia';
		
		$config['total_rows']     = $this->db->where('page','serbia')->from("ms_galerija")->count_all_results();//$this->db->count_all('ms_galerija');
		$config['per_page'] 	  = 9;
		
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
		
		$page ="serbia";
		$data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$data['deptlist'] = $this->Locations_Model->galerija($config["per_page"], $data['page'], $page); 
		
		$data['pagination'] = $this->pagination->create_links();

//////////////////////////////////////////////////////////////////////
		$linkovi ="<script type='text/javascript' src='http://msci.swissmedicacrm.com/fancybox/lib/jquery-1.10.1.min.js'></script>
				   <script type='text/javascript' src='http://msci.swissmedicacrm.com/fancybox/source/jquery.fancybox.js'></script>
		           <link rel='stylesheet' type='text/css' href='http://msci.swissmedicacrm.com/fancybox/source/jquery.fancybox.css' media='screen' />";
		$data['links']=$linkovi;
		$this->load_view('locations/belgrade', $data);
    }

    public function russia()
	{
		$config['base_url'] 	  = 'http://msci.swissmedicacrm.com/Locations/russia';
		
		$config['total_rows']     = $this->db->where('page','rusia')->from("ms_galerija")->count_all_results();//$this->db->count_all('ms_galerija');
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
		
		$page ="rusia";
		$data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$data['deptlist'] = $this->Locations_Model->galerija($config["per_page"], $data['page'], $page); 
		
		$data['pagination'] = $this->pagination->create_links();

//////////////////////////////////////////////////////////////////////
		$linkovi ="<script type='text/javascript' src='http://msci.swissmedicacrm.com/fancybox/lib/jquery-1.10.1.min.js'></script>
				   <script type='text/javascript' src='http://msci.swissmedicacrm.com/fancybox/source/jquery.fancybox.js'></script>
				   <link rel='stylesheet' type='text/css' href='http://msci.swissmedicacrm.com/fancybox/source/jquery.fancybox.css' media='screen' />";
		$data['links']=$linkovi;
		
		$this->load_view('locations/moscow', $data);
	}
	public function tour(){
		$this->load->view('tour');
	}
}