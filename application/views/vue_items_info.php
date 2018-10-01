<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Items</title>
</head>
<body>

	<?php foreach($info_items as $value): ?>

	<p> <?php echo $value->nom .' '.$value->description .' '.$value->pu  ?> </p>
	<img src="<?php echo base_url($value->image); ?>">
	<?php endforeach ?>
</body>
</html>
