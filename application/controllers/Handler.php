<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Handler extends Frontend_Controller {
    function __construct() {
        parent::__construct();
        
        $this->load->helper('email');

    }
      

    public function index(){
		/*$this->load->library('session');
        $this->load->library('user_agent');
        $this->load->library('email');
        $this->load->library('form_validation');
        
        $this->load->helper('form');

        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('phone', 'Phone', 'required');
        $this->form_validation->set_rules('message', 'Message', 'required');
        
        //$this->form_validation->set_message('required', 'Obavezno POLJE!');

        if ($this->form_validation->run() == FALSE){
            $this->load->view('header');
            $this->load->view('contact');
            $this->load->view('footer');
        }
        else{*/

            $this->load->library('amo/contact');
            $this->load->library('recaptcha/recaptcha');


            $this->contact->prepare();
            $this->contact->auth();
            $this->contact->account_curent();
            $this->contact->fields_info();
            $this->contact->contacts_list();
            //$var=$this->contact->lead_add();
            $this->contact->contact_add();
            
            $this->send_mail();
            
          /*  $this->recaptcha();*/

        /*}*/

    }
    public function contact(){
        $this->load->library('session');
        $this->load->library('user_agent');
        $this->load->library('email');
        $this->load->library('form_validation');
        
        $this->load->helper('form');

        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('phone', 'Phone', 'required');
        $this->form_validation->set_rules('message', 'Message', 'required');
       // $this->form_validation->set_rules('g-recaptcha-response', 'Recaptcha', 'required');
        
        //$this->form_validation->set_message('required', 'Obavezno POLJE!');

        $this->load->library('recaptcha/recaptcha');
        $recaptcha = $this->input->post('g-recaptcha-response');

        if ($this->form_validation->run() == FALSE || (empty($recaptcha))){
            

            $data['recaptcha_error'] = "<label class='label-red'>Please verify that you are not a robot.</label>";
            $data['error']='Please verify that you are not a robot! Please, mark the checkbox under the Message field.';
            $this->load_view('contact', $data);
            
        }
        else{

            $response = $this->recaptcha->verifyResponse($recaptcha);
            if (isset($response['success']) and $response['success'] === true) {
                /*echo "You got it!";
                var_dump($response);*/
                $this->index();
            }

        }

   
        
    
    }

    public function pop_up(){
        $this->load->library('session');
        $this->load->library('user_agent');
        $this->load->library('email');
        $this->load->library('form_validation');
        
        $this->load->helper('form');

        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        //$this->form_validation->set_rules('phone', 'Phone', 'required');
        $this->form_validation->set_rules('message', 'Message', 'required');
        
        //$this->form_validation->set_message('required', 'Obavezno POLJE!');

        if ($this->form_validation->run() == FALSE){
            $this->load_view('error');
        }
        else{
            $this->index();
        }
    
    }
    public function send_mail(){
        $this->load->library('session');
        $this->load->library('user_agent');
        $this->load->library('email');

        $name        = $this->input->post('name');
        $email       = $this->input->post('email');
        $phone       = $this->input->post('phone');
        $message     = $this->input->post('message');
        $birth       = $this->input->post('birth');
        $weight      = $this->input->post('weight');
        $diagnosis   = $this->input->post('diagnosis');
        $howlong     = $this->input->post('howlong');
        $medications = $this->input->post('medications');
        $headinjury  = $this->input->post('headinjury');
        $heart       = $this->input->post('heart');
        $lungs       = $this->input->post('lungs');
        $liver       = $this->input->post('liver');
        $digestive   = $this->input->post('digestive');
        $muscular    = $this->input->post('muscular');
        $other       = $this->input->post('other');
        $assistance  = $this->input->post('assistance');
        $gender      = $this->input->post('gender');
        $illness     = $this->input->post('illnes');

		$htmlContent = '<h1>Poruka sa sajta</h1>';

        $htmlContent .= '<p class="red">Od: '.$name.'<br/> Pol: '.$gender.'<br/> Telefon: '.$phone.'<br/> Email: '.$email.'<br/> Poruka: '.$message.'</p>';
        $htmlContent .= '<p>Datum rodjenja: '.$birth.'<br/> Tezina/visina: '.$weight.'<br/> Diagnoza: '.$diagnosis.'<br/> Koliko dugo pati od bolesti: '.$howlong.'<br/> Lekove i preparate koje koristi:'.$medications.'</p>';
        $htmlContent .= '<p>Detaljniji opis: '.$headinjury.'<br/> Heart: '.$heart.'<br/> lungs: '.$lungs.'<br/> liver: '.$liver.'<br/> digestive:'.$digestive.'<br/> muscular:'.$muscular.'<br/> other:'.$other.'<br/> assistance:'.$assistance.'</p>';

        $config['mailtype'] = 'html';
		$this->email->initialize($config);

        $this->email->from('test@msci.swissmedicacrm.com', 'MS new site');
        $this->email->to('skenderi.e94@gmail.com');
        //$this->email->cc('another@another-example.com');
        //$this->email->bcc('them@their-example.com');

        $this->email->subject('multipla sclerosis');
        $this->email->message($htmlContent);

        $this->email->send();


        $this->session->set_flashdata('success', "Thank You for contacting us"); 
        redirect($this->agent->referrer());
    }

}