<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Questionaire extends CI_Controller {
    function __construct() {
        parent::__construct();
        

    }

    public function index(){
        #$this->load->library('session');
        $this->load->view('questionaire');
    }
}