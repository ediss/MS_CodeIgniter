<?php defined('BASEPATH') or exit('No direct script access allowed');
class Test2 extends CI_Controller
{
    public function index()
    {
        // load from spark tool
       // $this->load->spark('recaptcha-library/1.0.1');
        // load from CI library
        $this->load->library('recaptcha/recaptcha');
        $recaptcha = $this->input->post('g-recaptcha-response');
        if (!empty($recaptcha)) {
            $response = $this->recaptcha->verifyResponse($recaptcha);
            if (isset($response['success']) and $response['success'] === true) {
                echo "You got it!";
            }
        }
        else{
            var_dump($recaptcha);
            echo "ne prolazi";
        }
        $data = array(
            'widget' => $this->recaptcha->getWidget(),
            'script' => $this->recaptcha->getScriptTag(),
        );
        $this->load->view('recaptcha', $data);
    }
}