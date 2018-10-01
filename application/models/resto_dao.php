<?php 
	class Resto_dao extends CI_Model{

		private $table = "restaurant";
		private $table_items = "items";

		function __construct(){
			parent::__construct();
		}

/*======================================================================================================================*/
		public function info_resto($id){

			$requete = $this->db->select(Array('nom','adresse','phone','mail'))
								->WHERE('id',(int)$id)
								->get($this->table)
								->result();
			return $requete;
		}

/*======================================================================================================================*/
		public function set_items($nom, $description, $pu, $idcot, $idresto, $path){

			$this->db->set('nom', $nom);
			$this->db->set('description', $description);
			$this->db->set('pu', $pu);
			$this->db->set('idcot', $idcot);
			$this->db->set('idresto', $idresto);
			$this->db->set('image', $path);

			return $this->db->insert($this->table_items);
		}

/*===================================================================================================================*/		
		public function get_items($id){

			$requete = $this->db->select(Array('nom','description','pu','image'))
				->get($this->table_items)
				->result();
			return $requete;
		}

		public function update($id, $nom=null, $description=null, $pu=null){

			if ($nom == null AND $description == null AND $pu == null){
				return false;
			}
			else{

				$this->db->set('nom', $nom);
				$this->db->set('description', $description);
				$this->db->set('pu', $pu);
				
				return $this->db->where('id', (int)id)
				->update($this->table_items);
			}
		}
	}
?>
