<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HouseholdModel extends MY_Model {
    function __construct() {
        parent::__construct();
        $this->table = 'household';
        $this->id = 'householdId';
    }
}
