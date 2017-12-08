<footer class="row">
	<div class="container">
		<div class="row">
			<div class="col-sm-8 col-md-6 col-lg-5 footer_menuList">
				<div class="heading row m0"><?php echo $this->Html->image('/static/website/img/logo_h_inverted.png') ?></div>
				<div class="row menuList">
					<ul class="firstOrderList nav">
						<li class="active"><a href="#">Inicio</a></li>
						<li><a href="#">Servicios</a></li>
						<li><a href="#">Doctores</a></li>
						<li><a href="#">Especialidades</a></li>
					</ul>
					<ul class="secondOrderList nav">
						<li><a href="#">blog</a></li>
						<li><a href="#">contacto</a></li>
						<li><a href="#">Tienda</a></li>
						<li><a href="#">Nosotros</a></li>
					</ul>
					<ul class="thirdOrderList nav">
						<li><a href="#">Condiciones</a></li>
						<li><a href="#">Privacidad</a></li>
						<li><a href="#">Legal</a></li>
						<li><a href="#">Mapa del Sitio</a></li>
					</ul>
				</div>
			</div>
			<div class="col-sm-4 col-md-6 col-lg-3 footer_address">
				<div class="heading row m0"></div>
				<div class="row address m0">
					<div class="media address_line">
						<div class="media-left icon"><i class="fa fa-map-marker"></i></div>
						<div class="media-body address_text">San Isidro, Lima,  <br>Peru</div>
					</div>
					<div class="media address_line">
						<div class="media-left icon"><i class="fa fa-envelope"></i></div>
						<div class="media-body address_text">info@tucita.pe</div>
					</div>
					<div class="media address_line">
						<div class="media-left icon"><i class="fa fa-phone"></i></div>
						<div class="media-body address_text">123 7890 456</div>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 newsletter">
				<div class="heading row m0">
					<h2>subscibe!</h2>
				</div>
				<form action="#" class="row m0 appointment_home_form2 newsletter_form2">
					<div class="form_inputs row m0">
						<div class="row m0 input_row">
							<div class="col-xs-6 p0">
								<label for="newsl_fname">First Name</label>
								<input type="text" class="form-control" id="newsl_fname" placeholder="Your First Name">
							</div>
							<div class="col-xs-6 p0">
								<label for="newsl_lname">Last Name</label>
								<input type="text" class="form-control" id="newsl_lname" placeholder="Your Last Name">
							</div>
						</div>
						<div class="row m0 input_row">
							<label for="newsl_email">Email Address</label>
							<input type="email" class="form-control" id="newsl_email" placeholder="Enter your Email Address">
						</div>
						<input type="submit" class="form-control" value="submit">
					</div>
				</form>
			</div>
		</div>
		<div class="row m0 footer_bottom">
			<ul class="list-inline social_menu m0 fleft">
				<li><a href="#"><i class="fa fa-twitter"></i></a></li>
				<li><a href="#"><i class="fa fa-facebook"></i></a></li>
				<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
				<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
				<li><a href="#"><i class="fa fa-instagram"></i></a></li>
				<li><a href="#"><i class="fa fa-youtube"></i></a></li>
			</ul>
			<div class="fright copyright">&copy; <a href="{% url 'home' %}">TuCita.pe 2017</a>. Hecho con ❤️ por personas geniales.</div>
		</div>
	</div>
</footer>

<div class="modal fade" id="appointmefnt_form_pop" tabindex="-1" role="dialog" aria-labelledby="appointmefnt_form_pop">
	<div class="modal-dialog modal-sm" role="document">
		<div class="modal-content">
			<form action="#" class="row m0 appointment_home_form2">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<i class="fa fa-times-circle-o"></i>
					</button>
					<h2 class="title">Registrarse</h2>
					<div class="form_inputs row m0">
						<div class="row m0 input_row">
							<div class="col-sm-12 col-md-12 col-lg-6 p0">
								<label for="app_fname">First Name</label>
								<input type="text" class="form-control" id="app_fname" placeholder="Your First Name">
							</div>
							<div class="col-sm-12 col-md-12 col-lg-6 p0">
								<label for="app_lname">Last Name</label>
								<input type="text" class="form-control" id="app_lname" placeholder="Your Last Name">
							</div>
						</div>
						<div class="row m0 input_row">
							<label for="app_email">Email Address</label>
							<input type="email" class="form-control" id="app_email" placeholder="Enter your Email Address">
						</div>
						<div class="row m0 input_row">
							<label for="app_phone">Phone Number</label>
							<input type="tel" class="form-control" id="app_phone" placeholder="Enter your Phone Number">
						</div>
						<div class="row m0 input_row">
							<label for="app_date">Booking Date</label>
							<div class="input-append date">
								<input type="text" class="form-control" name="date" id="app_date" placeholder="Select the Appointment Date">
								<span class="add-on"><i class="icon-th"></i></span>
							</div>
						</div>
						<div class="row m0 input_row">
							<label for="app_texts">Message</label>
							<textarea  id="app_texts" class="form-control" placeholder="Write down the Message"></textarea>
						</div>
						<input type="submit" class="form-control" value="Registrarse">
					</div>
					<div class="row m0 form_footer">
						<a href="#"><?php echo $this->Html->image('/static/website/theme/images/call-now33.png') ?>123 7890 456</a>
					</div>
				</form>
		</div>
	</div>
</div>
