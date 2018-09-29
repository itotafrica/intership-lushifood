<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Items</title>
</head>
<body>

	<?php echo form_open('info_resto/add_items'); ?>

		<label for="nom" name="nom" >Nom</label>
		<input type="text" for="nom" name="nom">

		<label for="description" name="description" >description</label>
		<input type="text" for="description" name="description">

		<label for="pu" name="pu" >pu</label>
		<input type="text" name="pu">

		<input type="submit" value ="envoyer">
	<?php echo form_close(); ?>
</body>
</html>
