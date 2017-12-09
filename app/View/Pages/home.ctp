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
<!--SERVICIOS MEDICOS         -->
<section class="row service_block_row bgf">
	<div class="container">
		<div class="row titleRow">
			<h5>NUESTRO</h5>
			<h2>SERVICIOS MEDICOS</h2>
		</div>
		<div class="row">
			<div class="col-sm-6 col-md-4 service_block">
				<div class="row m0 inner">
					<div class="row icon"><img src="<?php echo $this->webroot."static/website/theme/images/icons/service_block/1.png";?>" alt></div>
					<a href="#"><h4>Cuida tu salud</h4></a>
					<p></p>
				</div>
			</div>
			<div class="col-sm-6 col-md-4 service_block">
				<div class="row m0 inner">
					<div class="row icon"><img src="<?php echo $this->webroot."static/website/theme/images/icons/service_block/2.png";?>" alt></div>
					<a href="#"><h4>Test de ADN</h4></a>
					<p>Lorem ipsum dolor sit amet, consectetur cing elit. Aliq uam porttitor, nuncso</p>
				</div>
			</div>
			<div class="col-sm-6 col-md-4 service_block">
				<div class="row m0 inner">
					<div class="row icon"><img src="<?php echo $this->webroot."static/website/theme/images/icons/service_block/3.png";?>" alt></div>
					<a href="#"><h4>Tratamiento general</h4></a>
					<p>Lorem ipsum dolor sit amet, consectetur cing elit. Aliq uam porttitor, nuncso</p>
				</div>
			</div>
			<div class="col-sm-6 col-md-4 service_block">
				<div class="row m0 inner">

					<div class="row icon"><img src="<?php echo $this->webroot."static/website/theme/images/icons/service_block/4.png";?>" alt></div>
					<a href="#"><h4>Servicio de emergencia</h4></a>
					<p>Lorem ipsum dolor sit amet, consectetur cing elit. Aliq uam porttitor, nuncso</p>
				</div>
			</div>
			<div class="col-sm-6 col-md-4 service_block">
				<div class="row m0 inner">
					<div class="row icon"><img src="<?php echo $this->webroot."static/website/theme/images/icons/service_block/5.png";?>" alt></div>
					<a href="#"><h4>Consultas</h4></a>
					<p>Lorem ipsum dolor sit amet, consectetur cing elit. Aliq uam porttitor, nuncso</p>
				</div>
			</div>
			<div class="col-sm-6 col-md-4 service_block">
				<div class="row m0 inner">
				<div class="row icon"><img src="<?php echo $this->webroot."static/website/theme/images/icons/service_block/6.png";?>" alt></div>
					<a href="#"><h4>Cuidado dental</h4></a>
					<p>Lorem ipsum dolor sit amet, consectetur cing elit. Aliq uam porttitor, nuncso.</p>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="row about_medicalpro_row about_medicalpro_row2">
	<div class="container">
		<div class="row titleRow">
			<h5>EXPLORE NUESTROS</h5>
			<h2>SERVICIOS MÉDICOS</h2>
		</div>
		<div class="row">
			<ul class="nav nav-tabs department_tab" role="tablist">
				<li role="presentation" class="active"><a href="#dept1" aria-controls="dept1" role="tab" data-toggle="tab">MEDICINA GENERAL</a></li>
				<li role="presentation"><a href="#dept2" aria-controls="dept2" role="tab" data-toggle="tab">ONCOLOGÍA</a></li>
				<li role="presentation"><a href="#dept3" aria-controls="dept3" role="tab" data-toggle="tab">GINECOLOGÍA</a></li>
				<li role="presentation"><a href="#dept4" aria-controls="dept4" role="tab" data-toggle="tab">CARGIOLOGÍA</a></li>
				<li role="presentation"><a href="#dept5" aria-controls="dept5" role="tab" data-toggle="tab">NEUROLOGÍA</a></li>
				<li role="presentation"><a href="#dept6" aria-controls="dept6" role="tab" data-toggle="tab">DENTAL</a></li>
			</ul>
			<div class="tab-content">
				<div role="tabpanel" class="tab-pane active" id="dept1">
					<div class="row m0 about_medicalpro">
						<div class="row m0 inner">
							<div class="col-sm-12 col-md-6 img">
								<div class="row">
									<img src="./assets/about2.png" alt="" class="img-responsive">
								</div>
							</div>
							<div class="col-sm-12 col-md-6 content">
								<div class="row">
									<h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque quis varius Praesent lacinia elit nec nisl.</h3>
									<p>Fusce ut velit semper, semper arcu quis, aliquam magna. Etiam sed justo et sem varius euismod. In ac justo urna. Donec tincid unt nisl semper sapien ullamcorper, <br><br>Nec imperdiet augue pretium. Curabitur eu ligula euismod, inter dum libero at, tincidunt sem. Integer ut lacus.</p>
										<a href="#" class="view_all">Reservar Ahora</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div role="tabpanel" class="tab-pane" id="dept2">
					<div class="row m0 about_medicalpro">
						<div class="row m0 inner">
							<div class="col-sm-12 col-md-6 img">
								<div class="row">
									<img src="./assets/about2.png" alt="" class="img-responsive">
								</div>
							</div>
							<div class="col-sm-12 col-md-6 content">
								<div class="row">
									<h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque quis varius Praesent lacinia elit nec nisl.</h3>
									<p>Fusce ut velit semper, semper arcu quis, aliquam magna. Etiam sed justo et sem varius euismod. In ac justo urna. Donec tincid unt nisl semper sapien ullamcorper, <br><br>Nec imperdiet augue pretium. Curabitur eu ligula euismod, inter dum libero at, tincidunt sem. Integer ut lacus.</p>
									<a href="#" class="view_all">Reservar Ahora</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div role="tabpanel" class="tab-pane" id="dept3">
					<div class="row m0 about_medicalpro">
						<div class="row m0 inner">
							<div class="col-sm-12 col-md-6 img">
								<div class="row">
									<img src="./assets/about2.png" alt="" class="img-responsive">
								</div>
							</div>
							<div class="col-sm-12 col-md-6 content">
								<div class="row">
									<h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque quis varius Praesent lacinia elit nec nisl.</h3>
									<p>Fusce ut velit semper, semper arcu quis, aliquam magna. Etiam sed justo et sem varius euismod. In ac justo urna. Donec tincid unt nisl semper sapien ullamcorper, <br><br>Nec imperdiet augue pretium. Curabitur eu ligula euismod, inter dum libero at, tincidunt sem. Integer ut lacus.</p>
									<a href="#" class="view_all">Reservar Ahora</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div role="tabpanel" class="tab-pane" id="dept4">
					<div class="row m0 about_medicalpro">
						<div class="row m0 inner">
							<div class="col-sm-12 col-md-6 img">
								<div class="row">
									<img src="./assets/about2.png" alt="" class="img-responsive">
								</div>
							</div>
							<div class="col-sm-12 col-md-6 content">
								<div class="row">
									<h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque quis varius Praesent lacinia elit nec nisl.</h3>
									<p>Fusce ut velit semper, semper arcu quis, aliquam magna. Etiam sed justo et sem varius euismod. In ac justo urna. Donec tincid unt nisl semper sapien ullamcorper, <br><br>Nec imperdiet augue pretium. Curabitur eu ligula euismod, inter dum libero at, tincidunt sem. Integer ut lacus.</p>
									<a href="#" class="view_all">Reservar ahora</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div role="tabpanel" class="tab-pane" id="dept5">
					<div class="row m0 about_medicalpro">
						<div class="row m0 inner">
							<div class="col-sm-12 col-md-6 img">
								<div class="row">
									<img src="./assets/about2.png" alt="" class="img-responsive">
								</div>
							</div>
							<div class="col-sm-12 col-md-6 content">
								<div class="row">
									<h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque quis varius Praesent lacinia elit nec nisl.</h3>
									<p>Fusce ut velit semper, semper arcu quis, aliquam magna. Etiam sed justo et sem varius euismod. In ac justo urna. Donec tincid unt nisl semper sapien ullamcorper, <br><br>Nec imperdiet augue pretium. Curabitur eu ligula euismod, inter dum libero at, tincidunt sem. Integer ut lacus.</p>
									<a href="#" class="view_all">Reservar Ahora</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div role="tabpanel" class="tab-pane" id="dept6">
					<div class="row m0 about_medicalpro">
						<div class="row m0 inner">
							<div class="col-sm-12 col-md-6 img">
								<div class="row">
									<img src="./assets/about2.png" alt="" class="img-responsive">
								</div>
							</div>
							<div class="col-sm-12 col-md-6 content">
								<div class="row">
									<h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque quis varius Praesent lacinia elit nec nisl.</h3>
									<p>Fusce ut velit semper, semper arcu quis, aliquam magna. Etiam sed justo et sem varius euismod. In ac justo urna. Donec tincid unt nisl semper sapien ullamcorper, <br><br>Nec imperdiet augue pretium. Curabitur eu ligula euismod, inter dum libero at, tincidunt sem. Integer ut lacus.</p>
									<a href="#" class="view_all">Reservar Ahora</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="row quick_blocks_row quick_blocks_row2">
	<div class="container">
		<div class="row">
			<div class="col-sm-4 quick_block emmergency">
				<div class="row m0 inner">
					<div class="row heading m0">
						<h5>SIN DEMORAS</h5>
						<h3>ENCUENTRE RÁPIDAMENTE</h3>
					</div>
					<p>Lorem ipsum dolor sit amet, consectet uam porttitor, nunc et fringilla.</p>
					<a href="#">EXPLORE ESPECIALISTAS</a>
				</div>
			</div>
			<div class="col-sm-4 quick_block branches">
				<div class="row m0 inner">
					<div class="row heading m0">
						<h5>CERCA DE USTED</h5>
						<h3>MÁS DE 250 LOCALIDADES</h3>
					</div>
					<p>Lorem ipsum dolor sit amet, consectet uam porttitor, nunc et fringilla.</p>
					<a href="#">nearest location</a>
				</div>
			</div>
			<div class="col-sm-4 quick_block bill_payments">
				<div class="row m0 inner">
					<div class="row heading m0">
						<h5>AHORRE TIEMPO Y DINERO</h5>
						<h3>CONSULTE SUS RESULTADOS DESDE LA PLATAFORMA</h3>
					</div>
					<p>Lorem ipsum dolor sit amet, nunc et fringilla.</p>
					<a href="#">pay your bill now</a>
				</div>
			</div>
		</div>
	</div>
</section>



<!-- LISTADO DE DOCTORES-->
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



<!-- TESTIMONIO-NUESTROBLOG-->

<section class="row recentpost_acc recentpost_acc2">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-6 testimonial_section">
					<div class="inner row m0">
						<div class="row m0 titleRow text-left">
							<h5>NUESTROS CLIENTES LO RECONOCEN</h5>
							<h2>TESTIMONIOS</h2>
						</div>
						<div class="flexslider testimonial_slider">
							<ul class="slides">
								<li style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;" class="">
									<div class="row m0 recent_post testi_content">
										<div class="row m0 inner">
											<div class="postText row m0">
												Etiam tristique sagittis pulvinar. Cras at lectus rho scelerisque dui ut, bibendum ante. Ut vulputate dit neque eget lobortis. <br><br>Nam eleifend sollicitudin nulla quis luctus nam Interdum et malesuada fames.
											</div>
											<div class="media authorMeta">
												<div class="media-left"><img src="./assets/2(1).png" alt="" draggable="false"></div>
												<div class="media-body media-middle">
													<h5>Nataly Suyón</h5>
													<div class="row designation">Universidad Nacional del Santa</div>
												</div>
											</div>
										</div>
									</div>
								</li>
								<li style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 1; display: block; z-index: 2;" class="flex-active-slide">
									<div class="row m0 recent_post testi_content">
										<div class="row m0 inner">
											<div class="postText row m0">
												Etiam tristique sagittis pulvinar. Cras at lectus rho scelerisque dui ut, bibendum ante. Ut vulputate dit neque eget lobortis. <br><br>Nam eleifend sollicitudin nulla quis luctus nam Interdum et malesuada fames.
											</div>
											<div class="media authorMeta">
												<div class="media-left"><img src="./assets/2(1).png" alt="" draggable="false"></div>
												<div class="media-body media-middle">
													<h5>Richard Cotrina</h5>
													<div class="row designation">www.pytel.pe</div>
												</div>
											</div>
										</div>
									</div>
								</li>
								<li style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;" class="">
									<div class="row m0 recent_post testi_content">
										<div class="row m0 inner">
											<div class="postText row m0">
												Etiam tristique sagittis pulvinar. Cras at lectus rho scelerisque dui ut, bibendum ante. Ut vulputate dit neque eget lobortis. <br><br>Nam eleifend sollicitudin nulla quis luctus nam Interdum et malesuada fames.
											</div>
											<div class="media authorMeta">
												<div class="media-left"><img src="./assets/2(1).png" alt="" draggable="false"></div>
												<div class="media-body media-middle">
													<h5>Algún Influencer</h5>
													<div class="row designation">www.importante.com</div>
												</div>
											</div>
										</div>
									</div>
								</li>
							</ul>
						<ol class="flex-control-nav flex-control-paging"><li><a class="">1</a></li><li><a class="flex-active">2</a></li><li><a class="">3</a></li></ol></div>
					</div>
				</div>
				<div class="col-sm-12 col-md-6 recent_post_home">
					<div class="row m0 titleRow text-left">
						<h5>ÚLTIMAS NOTICIAS</h5>
						<h2>NUESTRO BLOG</h2>
					</div>
					<div class="row m0">
						<div class="media">
							<div class="media-left">
								<a href="https://tucita.pe/single-post.html"><img src="./assets/1(2).jpg" alt="" class="img-reponsive"></a>
							</div>
							<div class="media-body">
								<a href="https://tucita.pe/single-post.html"><h4>TÍTULO DE UN POST INTERESANTE</h4></a>
								<div class="row m0 meta">Por : <a href="https://tucita.pe/#">SIN NOMBRE</a> &nbsp; Fecha : <a href="https://tucita.pe/#">20 de Octubre</a></div>
								<p>Lorem ipsum dolor sit amet, conseings ctetur adipiscing elit. </p>
							</div>
						</div>
						<div class="media">
							<div class="media-left">
								<a href="https://tucita.pe/single-post.html"><img src="./assets/1(2).jpg" alt="" class="img-reponsive"></a>
							</div>
							<div class="media-body">
								<a href="https://tucita.pe/single-post.html"><h4>TÍTULO DE UN POST INTERESANTE 2</h4></a>
								<div class="row m0 meta">Por : <a href="https://tucita.pe/#">SIN NOMBRE</a> &nbsp; Fecha : <a href="https://tucita.pe/#">19 de Octubre</a></div>
								<p>Lorem ipsum dolor sit amet, conseings ctetur adipiscing elit. </p>
							</div>
						</div>
						<a href="https://tucita.pe/blog.html" class="view_all">ver más</a>
					</div>
				</div>
			 </div>
		 </div>
	</section>

	<section class="row book_bannerType2">
	<div class="container">
		<div class="row m0">
			<h4>RESERVA TU CITA</h4>
			<h2>CONSULTA Y PROGRAMA TUS CITAS ONLINE</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque lacinia, ipsum eu vulputate pulvinar, some good text will appear odio dui semper elit, id pulvinar see our servies over here.</p>
			<a href="https://tucita.pe/#" data-toggle="modal" data-target="#appointmefnt_form_pop" class="view_all">RESERVA TU CITA</a>
		</div>
	</div>
</section>
