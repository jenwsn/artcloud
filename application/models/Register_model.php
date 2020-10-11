<?php
class Register_model extends CI_Model {
    public function __construct(){
        parent::__construct();
    }
    public function register_input() {
        $this->load->helper('array');

        $register_username_input = $this->input->post('register_username');
        $register_pass_input = $this->input->post('register_password');

        $data = array(
            'username' => $register_username_input,
            'pass' => $register_pass_input,
            'email' => $this->input->post('register_email'),
            'phone' => $this->input->post('register_phonenum')
        );

        $this->load->database();
        $this->db->insert('user', $data);

        //auto signin
        $_SESSION['signin_valid'] = 'yes';

        $_SESSION['username'] = $register_username_input;
        $_SESSION['password'] = $register_pass_input;

        $_SESSION['is_signed_in'] = 'yes';
    }
}