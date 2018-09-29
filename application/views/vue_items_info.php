<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Items</title>
</head>
<body>

	<?php foreach($set_items as $value): ?>

	<p> <?php echo $value->nom; ?> </p>

	<?php endforeach ?>
</body>
</html>
