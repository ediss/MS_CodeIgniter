<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pocetna extends Frontend_Controller {

	public function __construct(){
		parent::__construct();
		
	}
	public function index()
	{
		
		$this->load_view('pocetna_sadrzaj');
		
	}
}
