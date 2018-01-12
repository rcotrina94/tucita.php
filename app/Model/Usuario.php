<?php
  App::uses('AppModel', 'Model');
  /**
   *
   */
  class Usuario extends AppModel {
    public $hasOne = 'Doctor';
  }

?>
