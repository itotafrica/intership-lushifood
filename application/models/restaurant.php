<?php
    class restaurant extends CI_Model 
    {
        private $table = '';
        public function ajouter_restaurant($data)
        {
        
            $this->db->insert('Restaurant',$data);
        }
    }

?>
