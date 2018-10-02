<?php 

    class ITEMS extends CI_controllers(){

        public function __construct(){

            parent :: __construct();

            $this->load->database();
            $this->load->model("supprimer_item");
            $this ->load->model("modifier_item");
			$this->load->helper(array('form', 'url'));

        }



    }



























?.>