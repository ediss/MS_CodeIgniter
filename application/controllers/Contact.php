<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends Frontend_Controller {

	public function __construct(){
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('form');
        $this->load->helper('email');
       ## $this->load->library('user_agent');

    }
 
    public function index(){
        $this->load_view('contact');
    }



    public function send_mail(){
        $this->load->library('email');

        $name    = $this->input->post('name');
        $email   = $this->input->post('email');
        $phone   = $this->input->post('phone');
        $message = $this->input->post('message');

		$htmlContent = '<h1>Poruka sa sajta</h1>';

		$htmlContent .= '<p>Od: '.$name.'<br/> Telefon: '.$phone.'<br/> Email: '.$email.'<br/> Poruka: '.$message.'</p>';

        $config['mailtype'] = 'html';
		$this->email->initialize($config);

        $this->email->from('test@msci.swissmedicacrm.com', 'MS new site');
        $this->email->to('skenderi.e94@gmail.com');
        //$this->email->cc('another@another-example.com');
        //$this->email->bcc('them@their-example.com');

        $this->email->subject('multipla sclerosis');
        $this->email->message($htmlContent);

        $this->email->send();

        redirect($this->agent->referrer());
    }
}