<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Case_Studies extends Frontend_Controller {

    public function __construct(){
		parent::__construct();
    }

    public function index(){

        
        $this->load_view('case_studies');
    }

}