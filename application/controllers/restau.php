<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Restau extends CI_Controller {

    function __construct(){
	
        parent :: __construct();
}
}
    public function info_restau()
    {
        $this->load->models('afficher_info_restau');
    }


?>    