<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class essai_model extends CI_Model {
    private $table = 'add_cmd';
     function __construct(){
         parent::__construct();
     }

     public function add_commande(string $nom, string $adresse, string $qty, string $total, string $plat){
         $this->db->set('nom',$nom);
         $this->db->set('adresse',$adresse);
         $this->db->set('quantite',$qty);
         $this->db->set('prixtotal',$total);
         $this->db->set('plat',$plat);
         return $this->db->insert($this->table);
     }
}