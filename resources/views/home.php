<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Platzi Blog in PHP!</title>
</head>
<body>
	<?php foreach($posts as $post): ?>
		<li>
			<h2><?= $post->getTitle(); ?> 
				<small><?= $post->getAuthor(); ?></small>
			</h2>
			<p><?= $post->getBody(); ?></p>
		</li>
	<?php endforeach; ?>
</body>
</html>