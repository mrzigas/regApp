<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('bootstrap.min');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
		
	
		echo $this->Html->meta('icon');
		echo $this->Html->css('bootstrap.min');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');

    
	?>
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
</head>
<body>

			<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
				<a class="navbar-brand" href="/users/profile">UNIOEC 2015 - Registration page</a>
				<div class="container">
					<?php //$this->fetch('navbar'); ?>
				</div>
			</nav>
	
			<div class="container" style="width: 600px; text-align: center"> <br><br><br><br>
				<?php echo $this->fetch('content'); ?>
			</div>
	
</body>
</html>
