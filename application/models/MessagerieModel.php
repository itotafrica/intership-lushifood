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
    function recupererConversation()
    {
       return $this->db->get("conversation")->result_array();
    }
    function insererMessage($data)
    {
        $this->db->insert("message",$data);
    }
}
?>