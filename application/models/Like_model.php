<?php
class Like_model extends CI_Model {
    public function __construct(){
        parent::__construct();
    }

    public function like($item_id){
        $this->load->helper('array');

        //start session
        $this->load->library('session');

        //reconnect to the database
        $this->load->database();

        $sql = "SELECT * FROM artwork WHERE artid = ?";
        $query = $this->db->query($sql, array($item_id));
        $row = $query->row();        


        foreach ($query->result_array() as $row) {
            $num_like = $row['likes'];
            break;
        }

        $new_like = $num_like + 1;

        $sql_like = "UPDATE artwork SET likes = ? WHERE artid = ?";
        $query_like = $this->db->query($sql_like, array($new_like, $item_id));
    }
}