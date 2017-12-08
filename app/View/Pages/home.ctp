<?php
/**
* @link          http://cakephp.org CakePHP(tm) Project
* @package       app.View.Pages
* @since         CakePHP(tm) v 0.10.0.1076
*/

if (!Configure::read('debug')):
	throw new NotFoundException();
endif;

if (Configure::read('debug') > 0):
	Debugger::checkSecurityKeys();
endif;
?>

<?php
App::uses('ConnectionManager', 'Model');
try {
	$connected = ConnectionManager::getDataSource('default');
} catch (Exception $connectionError) {
	$connected = false;
	$errorMsg = $connectionError->getMessage();
	if (method_exists($connectionError, 'getAttributes')):
		$attributes = $connectionError->getAttributes();
		if (isset($errorMsg['message'])):
			$errorMsg .= '<br />' . $attributes['message'];
		endif;
	endif;
}
?>
<?php
// if ($connected && $connected->isConnected()):
// 	echo '<span class="notice success">';
// 		echo __d('cake_dev', 'CakePHP is able to connect to the database.');
// 	echo '</span>';
// else:
// 	echo '<span class="notice">';
// 		echo __d('cake_dev', 'CakePHP is NOT able to connect to the database.');
// 		echo '<br /><br />';
// 		echo $errorMsg;
// 	echo '</span>';
// endif;
?>
<?php echo $this->element('slider'); ?>
<section class="row team_section_type2 bgf">
	<div class="container">
		<div class="row titleRow">
			<h5>CALIDAD ASEGURADA</h5>
			<h2>DOCTORES ESPECIALISTAS</h2>
		</div>
		<div class="row">
			<?php foreach ($doctores as $doctor_php): ?>
				<?php $doctor = $doctor_php['Doctor']; ?>
				<div class="col-sm-6 col-md-3 team_member">
					<div class="row m0 inner">
						<a href="<?php echo $this->Html->url(array('controller'=>'doctors', 'action'=>'detail', $doctor['id'] )) ?>">
							<div class="row m0 image">
								<?php echo $this->Html->image('/static/website/theme/images/pages/team/1.jpg', array('class'=>'img-responsive'))?>
							</div>
							<div class="row m0 title_row">
								<h5><?php echo $doctor['nombre']?></h5>
								<div class="row m0 pos"><?php echo $doctor['titulo']?></div>
							</div>
						</a>
						<p>Pequeño resumen del doctor.</p>
						<ul class="social_list">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
						</ul>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>
