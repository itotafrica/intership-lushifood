<?php
    class restaurant extends CI_Model 
    {
        public function ajouter_restaurant($data)
        {
        
            $this->db->insert('Restaurant',$data);
        }
    }

?>
