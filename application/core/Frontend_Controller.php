<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Frontend_Controller extends CI_Controller {
    function __construct() {
        parent::__construct();
        
    }
	
	public function load_view($view, $data=array()){
       // $data['class']="class=active";
        $this->load->library('recaptcha/recaptcha');
        $recaptcha = $this->input->post('g-recaptcha-response');
      
        $data['widget'] = $this->recaptcha->getWidget();
        $data['script'] = $this->recaptcha->getScriptTag();

        $this->load->view('header', $data); 
        $this->load->view($view);
        $this->load->view('footer', $data);
		
	}
}
