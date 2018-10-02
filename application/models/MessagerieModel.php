<?php
class MessagerieModel extends CI_Model{
    function __construct()
    {
        parent::__construct();
    }
    function insererConversation($data)
    {
        $this->db->insert("conversation",$data);
    }
}
?>