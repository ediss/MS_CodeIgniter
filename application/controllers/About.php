<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends Frontend_Controller {

	public function __construct(){
		parent::__construct();
        $this->load->helper('form');
        $this->load->model('About_MS_Model');
	}
	
	/*public function ms(){
		$id = $this->uri->segment(3);
        $data['news'] = $this->About_MS_Model->dohvati_jedan($id);
        //$data['slike']= $this->News_Model->dohvati_slike($id);
        //u viewu pitas isset $slike i stampas...
        //vidi jel mozes da pises img tag u bazu
        $this->load_view('about-ms', $data);
	}*/

	public function about_stem_cells(){
		$this->load_view('about_stem_cells');
	}
	
	public function treatment(){
		$this->load_view('about_treatment');
	}

	public function about_ms(){
		$id = $this->uri->segment(2);
		$data['text'] = $this->About_MS_Model->dohvati_jedan($id);
		$this->load_view('about-ms', $data);
	}//cekiran

	public function difference_ms_stroke(){
		
		$id = $this->uri->segment(2);
		$data['text'] = $this->About_MS_Model->dohvati_jedan($id);
		$this->load_view('about-ms',$data);
	}//cekiran

	public function living_with_ms_psychological(){
		$id = $this->uri->segment(2);
		$data['text'] = $this->About_MS_Model->dohvati_jedan($id);
		$this->load_view('about-ms',$data);
	}//cekiran

	public function living_with_ms_psychological2(){
		$id = $this->uri->segment(2);
		$data['text'] = $this->About_MS_Model->dohvati_jedan($id);
		$this->load_view('about-ms',$data);
	}//cekiran

	public function living_with_ms_physiotherapy(){
		$id = $this->uri->segment(2);
		$data['text'] = $this->About_MS_Model->dohvati_jedan($id);
		$this->load_view('about-ms',$data);
	}//cekiran
	
	public function ms_signs_and_sypmtoms(){
		$id = $this->uri->segment(2);
		$data['text'] = $this->About_MS_Model->dohvati_jedan($id);
		$this->load_view('about-ms',$data);
	}//cekiran

	public function early_signs_of_ms(){
		$id = $this->uri->segment(2);
		$data['text'] = $this->About_MS_Model->dohvati_jedan($id);
		$this->load_view('about-ms',$data);
	}//cekiran

	public function ms_types(){
		$id = $this->uri->segment(2);
		$data['text'] = $this->About_MS_Model->dohvati_jedan($id);
		$this->load_view('about-ms',$data);
	}//cekiran

	public function ms_risk_factor(){
		$id = $this->uri->segment(2);
		$data['text'] = $this->About_MS_Model->dohvati_jedan($id);
		$this->load_view('about-ms',$data);
	}//cekiran


	public function ms_cure(){
		$id = $this->uri->segment(2);
		$data['text'] = $this->About_MS_Model->dohvati_jedan($id);
		$this->load_view('about-ms',$data);
	}

	public function diagnosing_ms(){
		$id = $this->uri->segment(2);
		$data['text'] = $this->About_MS_Model->dohvati_jedan($id);
		$this->load_view('about-ms',$data);
	}

	public function ms_effects(){
		$id = $this->uri->segment(2);
		$data['text'] = $this->About_MS_Model->dohvati_jedan($id);
		$this->load_view('about-ms',$data);
	}

	public function ms_stem_cells(){
		$id = $this->uri->segment(2);
		$data['text'] = $this->About_MS_Model->dohvati_jedan($id);
		$this->load_view('about-ms',$data);
	}

	public function ms_statistic(){
		$id = $this->uri->segment(2);
		$data['text'] = $this->About_MS_Model->dohvati_jedan($id);
		$this->load_view('about-ms',$data);
	}

	public function ms_seizures_tremors(){
		$id = $this->uri->segment(2);
		$data['text'] = $this->About_MS_Model->dohvati_jedan($id);
		$this->load_view('about-ms',$data);
	}

	public function ms_quick_facts(){
		$id = $this->uri->segment(2);
		$data['text'] = $this->About_MS_Model->dohvati_jedan($id);
		$this->load_view('about-ms',$data);
	}

}
