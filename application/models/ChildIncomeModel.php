<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ChildIncomeModel extends MY_Model {

    function __construct() {
        parent::__construct();
        $this->table = 'childIncome';
        $this->id = 'childIncomeId';
    }

}
