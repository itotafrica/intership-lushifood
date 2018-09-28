<?php

    class Login extends CI_Controller
    {

        function __construct(){
            parent::__construct();
        }

        public function connexion(){
            $this->load->view('login');
        }

    }

?>