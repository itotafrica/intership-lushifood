<?php
	

class items extends CI_models
{
	
	function __construct($id_item, $nom_item, $descript, $prix_unit, $images, $id_cot, $id_rest)
	{
		parent:: __construct();

		$this->load->database();

		public function afficher_items($id){
_
			$query = $this->db->select(Array('nom','description','prix','images'))
								->WHERE('id',(int)$id)
								->get($this->table)
								->result();
			return $requete;
		}

		
		echo "les items :" .$query->num_row();
		}
	}



	public function supprimer_item($id_item)
	{

	}

	public function modification_item($id_item, $nom=null, $description=null, $prix_unitaire=null, $){
	
			if ($nom == null AND $description == null AND $pu == null){
				return false;
			}
			else{

				$this->db->set('nom', $nom);
				$this->db->set('description', $description);
				$this->db->set('pu', $prix_unitaire);
				
				return $this->db->where('id', (int)id)
				->update($this->table_items);
			}
			return $this->db->insert($this->table_items)
	}
	
        
        
        
        



?>