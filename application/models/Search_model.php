<?php

class Search_model extends CI_Model {
    public function __constructor(){
        parent::__constructor();
    }
    
    public function search(){
        //load helper array
        $this->load->helper('array');

        $this->load->database();

        // //get search keyword from the form
        $keyword = $this->input->post('search_key');

        if(!isset($_SESSION['username'])){
            $search_username = 'public';
        } else {
            $search_username = $_SESSION['username'];
        }

        $data = array(
            'searchid' => $search_username,
            'tags' => $keyword
        );
        
        $this->db->insert('search', $data);

        // SELECT * FROM movies WHERE title LIKE '%code%'
        $sql = "SELECT * FROM artwork WHERE title LIKE '%" .
            $this->db->escape_like_str($keyword)."%' ESCAPE '!'";
        $item_query = $this->db->query($sql);


        if(!$item_query) {
            return null;
        } else {
            return $item_query->result_array();
        }

       
        
    }
}