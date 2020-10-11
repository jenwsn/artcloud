<?php
class Signin_model extends CI_Model {
    public function __construct(){
        parent::__construct();
    }

    public function process_input(){

        //start session
        $this->load->library('session');

        //reconnect to the database
        $this->load->database();

        //get username input
        $username_signin_input = $this->input->post('username');
        $password_signin_input = $this->input->post('password');

        unset($_SESSION['signin_valid']);

        $sql = 'SELECT username, pass FROM user';
        $query = $this->db->query($sql);

        foreach ($query->result_array() as $row) {
            if ($row['username'] == $username_signin_input && $row['pass'] == $password_signin_input) {
                $_SESSION['signin_valid'] = 'yes';

                $_SESSION['username'] = $username_signin_input ;
                $_SESSION['password'] = $row['pass'];

                $_SESSION['is_signed_in'] = 'yes';

                break;
            } else {
                unset($_SESSION['signin_valid']);
                unset($_SESSION['is_signed_in']);
                $_SESSION['attempt_signin'] = 'yes';
            }
        }

    }
}