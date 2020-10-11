<?php

class Search extends CI_Controller {
    public function __constructor(){
        parent::__constructor();
        $this->load->helper('url');
    }

    public function index(){
        //load url helper
        $this->load->helper('url');

        //load array helper
        $this->load->helper('array');

        //load helper and the form validations
        $this->load->library('form_validation');
        $this->load->helper('form');

        $this->load->database();
        $this->load->library('session');

        //prepare data array
        $data = array(
            'keyword' => 'default',
            'search_result' => null
        );

        //reload the same page if the registration fails
        if ($this->form_validation->run() == FALSE){
            // //reload homepage
            // $this->load->view('header');
            // $this->load->view('index');
            // $this->load->view('footer');   

            //load model
            $this->load->model('search_model');

            //get information about the search
            $search_result = $this->search_model->search();

            //retrieve search keyword   
            $keyword = $this->input->post('search_key');

            //assign data array
            $data = array(
                'keyword' => $keyword,
                'search_result' => $search_result
            );

            $this->load->view('header');
            $this->load->view('search', $data);
            $this->load->view('footer');  

        }else{

            //retrieve search keyword   
            $keyword = $this->input->post('search_key');
            echo "<div>";
            echo "<p>";
            echo $keyword;
            echo "</p>";
            echo "</div>";

            // //load model
            // $this->load->model('search_model');

            // //get information about the search
            // $search_result = $this->search_model->search();

            // //retrieve search keyword   
            // $keyword = $this->input->post('search_key');

            // //assign data array
            // $data = array(
            //     'keyword' => $keyword,
            //     'search_result' => $search_result
            // );

            // echo "<div>";
            // echo "<p>";
            // echo $keyword;
            // echo "</p>";
            // echo "</div>";

            // show the results
            $this->load->view('header');
            $this->load->view('search', $data);
            $this->load->view('footer');      
        }
    }
}