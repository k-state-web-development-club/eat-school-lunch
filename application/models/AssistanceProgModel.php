<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AssistanceProgModel extends MY_Model {

  function __construct() {
    parent::__construct();
    $this->table = 'assistanceProg';
    $this->id = 'assistanceProgId';
  }

  function getByHouseHoldId($householdId) {

    if (!is_numeric($householdId) || $householdId < 1) {
        return false;
    }

    $this->db->where('householdId', $householdId);


    $result = $this->db->get($this->table);

    if ($result->num_rows() === 1) {
        return $result->row_array();
    }
    return false;
  }

}
