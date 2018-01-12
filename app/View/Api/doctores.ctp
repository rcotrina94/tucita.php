<?php
	foreach ($doctors as &$doctor) {
	    unset($doctor['Doctor']['generated_html']);
	}
	echo json_encode(compact('doctors'));
 ?>
