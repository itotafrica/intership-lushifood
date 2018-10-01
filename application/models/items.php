<?php
	

class items extends CI_models
{
	
	function __construct($id_item, $nom_item, $descript, $prix_unit, $images, $id_cot, $id_rest)
	{
	
		$this->load->database();

		public function afficher_items(string, $nom_rest){

		if (isset($nom_rest != "") {
		
			$query = $this->db->query("SELRECT * FROM Items");


			foreach ($query-> result() as $row) 
			{
				echo $row-> id_item;
				echo $row-> nom_item;
				echo $row-> descript;
				echo $row-> prix_unit;
				echo $row-> id_cot;
				echo $row-> id_rest;
				echo $row-> images;
			}
			$query->free_result();
		}
	//end_foreach();
		
		echo "les items :" .$query->num_row();
		}
	}

	public function ajouter_items($nom_item, $descript, $id_rest, $images)
	{
		/*$query = $this->db->set(array(
			'nom item' => $nom_item ,
			'decription'=> $descript,
			'identifiant cotation' => $id_cot,
			'identifiant restaurant' => $id_rest,
			'image item' => $images);
			)*/
			$items = new items();
			$items->nom_item = "";
			$items->descript = "";
		
			$items ->images = "";
			$items->save();

			$query = $this->db->simple_query("INSERT INTO Items VALUES($nom_item, $descript, $images)");

			if ($query ==TRUE) echo "success";

			else echo "Fail";



	}

	public function supprimer_item($id_item)
	{

	}
	function returnDescriptionDeCategorie ($id) {
		$q = Doctrine_Query::CREATE()
		->select('description')
		->from('Categorie c')
		->where('c.id_categorie = ?',$id);
		return $q->fetchOne()
        
        
        
        



?>