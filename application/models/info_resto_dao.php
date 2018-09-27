<?php 
	class Info_resto_dao extends CI_Model{

		public function info_resto(){

			$requete = $this->db->query("SELECT * FROM restaurant");
			return $requete;
		}
	}
?>
