<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Restau extends CI_Controller {

    function __construct(){
	
        parent :: __construct();
        $this->load->models('restaurant');
    }
}



?>    