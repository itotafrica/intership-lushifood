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

	<?php foreach($info_resto as $ligne): ?>
	
		<p> <?php echo $ligne->nom .' '. $ligne->adresse .' '. $ligne->phone .' '. $ligne->mail;  ?> </p>
	<?php endforeach ?>

</body>
</html>
