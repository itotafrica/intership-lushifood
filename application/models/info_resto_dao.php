<?php 
	class Info_resto_dao extends CI_Model{

		private $table = "restaurant";
		private $table_items = "items";

		function __construct(){
			parent::__construct();
		}
		
		public function info_resto($id){

			$requete = $this->db->select(Array('nom','adresse','phone','mail'))
								->WHERE('id',(int)$id)
								->get($this->table)
								->result();
			return $requete;
		}

		public function set_items($nom, $description, $pu){

			$this->db->set('nom', $nom);
			$this->db->set('description', $description);
			$this->db->set('pu', $pu);

			return $this->db->insert($this->table_items);
		}

		public function get_items(){
			
		}
	}
?>
