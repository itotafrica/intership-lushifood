<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Info resto</title>
</head>
<body>


	<?php /*NB: CETTE PAGE EST UNE VUE DE TEST EST N'EST PAS A METTRE DANS LE PROJECT	*/ ?>

	<?php foreach($info_resto->result() as $ligne){ ?>
	
	<p> <?php echo $ligne->id .' '. $ligne->nom .' '. $ligne->longitude .' '. $ligne->latitude .' '.
	 	$ligne->phone .' '. $ligne->mail; } ?> 
	</p>

	<?php foreach($info_items->result() as $ligne){ ?>
	
	<p> <?php echo $ligne->id .' '. $ligne->nom .' '. $ligne->description .' '. $ligne->pu 
		.' '. $ligne->image; } ?> 
	</p>

	<?php foreach($info_categorie_items->result() as $ligne){ ?>
	
	<p> <?php echo $ligne->id .' '. $ligne->nomcategorie .' '. $ligne->description
		 .' '. $ligne->iditems ; } ?> 
	</p>

</body>
</html>
