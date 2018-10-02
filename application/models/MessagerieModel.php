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
        $this->db->insert("Message",$data);
    }
    function recupererMessage($idconv)
    {
        $this->db->where("id_conv",$idconv);
        return $this->db->get("message");
    }
}
?>