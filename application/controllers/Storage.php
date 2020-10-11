<?php

class Storage extends CI_Controller {
    public function index() {
        $this->load->database();
        $this->load->library('session');
        $this->load->helper('url');

        $this->load->library('form_validation');
        $this->load->helper('form');
    
        $this->load->view('header');
		$this->load->view('storage');
		$this->load->view('footer');
    }
   
}