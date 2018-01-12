<?php
	foreach ($reservas as &$reserva) {
	    unset($reserva['Reserva']['generated_html']);
	}
	echo json_encode(compact('reservas'));
 ?>
