<?php
class MessagerieModel extends CI_Model{
    function __construct()
    {
        parent::__construct();
    }
    function inserer($data)
    {
        $this->db->insert("conversation",$data);

    }
}


?>