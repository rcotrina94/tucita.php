
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php
	echo $this->Html->meta('icon');
		//hoja de estilo para este layout
	echo $this->Html->css('/static/website/theme/css/bootstrap.min.css');
	echo $this->Html->css('/static/website/theme/css/font-awesome.min.css');
	echo $this->Html->css('/static/website/theme/vendors/owl.carousel/css/owl.carousel.min.css');
	echo $this->Html->css('/static/website/theme/vendors/owl.carousel/css/owl.theme.default.min.css');
	echo $this->Html->css('/static/website/theme/vendors/flexslider/flexslider.css');
	echo $this->Html->css('/static/website/theme/vendors/bootstrap-datepicker/css/datepicker3.css');
	echo $this->Html->css('https://fonts.googleapis.com/css?family=Karla:400,400italic,700,700italic');
	echo $this->Html->css('https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic');
	echo $this->Html->css('/static/website/custom/style.css');
	echo $this->Html->css('/static/website/theme/css/responsive/responsive.css');

	echo $this->fetch('meta');
	echo $this->fetch('css');
	echo $this->fetch('script');
	?>
</head>
<body class="default home3">

	<?php echo $this->element('header'); ?>


	<?php echo $this->Session->flash(); ?>

	<?php echo $this->fetch('content'); ?>
	<?php echo $this->element('footer'); ?>


	<?php echo $this->element('base_scripts'); ?>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
