<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Test extends CI_Controller {
    function __construct() {
        parent::__construct();
    }

public function index(){
    $this->load->helper('xml');
    $this->load->view('tour');
}
}