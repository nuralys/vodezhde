<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title><?php echo $title_for_layout ?> | vodezhde.kz</title>
	<meta content="telephone=no" name="format-detection">
	<meta name="robots" content="noodp, noydir">
	<meta content="initial-scale=1, minimum-scale=1, width=device-width" name="viewport">
	<meta name="HandheldFriendly" content="true">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<?php 
	echo $this->fetch('css');
	echo $this->fetch('script');
	echo $this->Html->css(array('reset', 'style', 'style2', 'slide', 'jquery.fancybox'));
	echo $this->Html->script(array('http://code.jquery.com/jquery-2.1.4.js', 'app', 'jquery.fancybox.pack', 'responsive-nav', 'zoomsl-3.0.min'));
	 ?>	
</head>
<body>
	<div class="page">
		<?php echo $this->element('header'); //Вывод шапки сайта ?>
		<div class="cr">
			<?php echo $this->fetch('content'); ?>
		</div>
		<?php echo $this->element('footer'); ?>
	</div>
</body>
</html>