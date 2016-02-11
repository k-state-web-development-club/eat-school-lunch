<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdultIncomeTypeModel extends MY_Model {

    function __construct() {
        parent::__construct();
        $this->table = 'adultIncomeType';
        $this->id    = 'adultIncomeTypeId';
    }

}
