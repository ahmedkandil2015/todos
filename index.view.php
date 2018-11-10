<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>My Tasks </h1>
	<ul>
		<?php foreach($tasks as $task): ?>
			<?php if($task->completed):?>
				<strike>
				<li><?= $task->description ?></li>
				</strike>
				<?php else:?>
				<li><?= $task->description ?></li>
				<?php endif;?>
	<?php endforeach;?>
	</ul>
</body>
</html>