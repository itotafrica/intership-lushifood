<?php 
	class Info_resto_dao extends CI_Model{

		public function info_resto(){

			$requete = $this->db->select(Array('nom','adresse','phone','mail'))
								->WHERE('id',int($id))
								->get($this->table);
			return $requete;
		}

		public function info_items(){

			$requete = $this->db->query("SELECT * FROM items");
			return $requete;
		}

	}
?>
