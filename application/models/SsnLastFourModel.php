<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SsnLastFourModel extends My_Model {

    function __construct() {
      parent::_construct();
      $this->table = 'ssnLastFour';
      $this->id    = 'ssnLastFourId';

    }

  }
