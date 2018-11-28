<?php

defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );




class Send_mail extends CI_Model{

	

	public function __construct() {

		parent::__construct ();

		$this->load->library('email');



	}



	public function send_mail(){





		$name=$this->input->post('name');

		$email=$this->input->post('email');

		$message=$this->input->post('message');

		$htmlContent = '<h1>Poruka sa sajta</h1>';

		$htmlContent .= '<p>Od: '.$name.'<br/> Email: '.$email.'</p>';


		$htmlContent.='<p><br/> Poruka:'.$message.'</p>';

		$config['mailtype'] = 'html';

		$this->email->initialize($config);

		$this->email->from('test@swissmedicacrm.com','AUTISM');

		$this->email->to('skenderi.e94@gmail.com');

		$this->email->subject('Form from website');

		$this->email->message($htmlContent);

		if($this->email->send()){
			echo "Radi!!";
		}
		else{
			echo "Ne radi!!";
		}

		/*$this->session->set_flashdata('message','Thanks for your message!');*/

	}

}































