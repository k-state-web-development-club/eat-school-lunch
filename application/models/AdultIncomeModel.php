<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdultIncomeModel extends MY_Model {

  function __construct() {
    parent::__construct();
    $this->table = 'adultIncome';
    $this->id    = 'adultIncomeId';
  }

}
