<?php
  App::uses('AppModel', 'Model');
  /**
   *
   */
  class Doctor extends AppModel {
    public $useTable = 'doctor_usuarios';
    public $belongsTo = 'Usuario';

  }

?>
