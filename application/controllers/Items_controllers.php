<?php 

    class ITEMS extends CI_controllers(){

        public function __construct(){

            parent :: __construct();

            $this->load->database();
            $this->load->model("items");
            $this ->load->model("restaurant");
			$this->load->helper(array('form', 'url'));

        }



    }



























?.>