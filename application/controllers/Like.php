<?php
class Like extends CI_Controller {
    public function index(){
        $this->load->database();
        $this->load->library('session');
        $this->load->helper('url');

        $this->load->library('form_validation');
        $this->load->helper('form');

        //get item id
        $item_id = $this->uri->segment(3);

        //load model
        $this->load->model('like_model');

        //get item information
        $this->like_model->like($item_id);

        //go back to previous page
        $page_id = $this->uri->segment(4);
        
        if($page_id == 'storage'){
            $this->load->view('header');
            $this->load->view('storage');
            $this->load->view('footer');
        }

        if($page_id == 'start'){
            $this->load->view('header');
            $this->load->view('index');
            $this->load->view('footer');
        }
       
    }
}