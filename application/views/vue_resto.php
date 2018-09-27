<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Info resto</title>
</head>
<body>
	
	<?php foreach($info_resto->result() as $ligne){ ?>
	
	<p> <?php echo $ligne->nom; } ?> </p>

</body>
</html>
