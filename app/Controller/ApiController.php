<?php

App::uses('Controller', 'AppController');

class ApiController extends AppController {
	public $uses = array('Doctor', 'Reserva');
	public $components = array('RequestHandler');
	public $layout = false;
	public function index() {

	}

	public function doctores() {
		$this->response->type('json');

		$doctores = $this -> Doctor -> find('all');
		$this->set('doctors', $doctores);
		$this->set('_serialize', array('doctors'));
	}

	public function reservas() {
		$this->response->type('json');

		$reservas = $this -> Reserva -> find('all');
		$this->set('reservas', $reservas);
		$this->set('_serialize', array('reservas'));
	}

}
