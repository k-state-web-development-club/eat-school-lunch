<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PersonModel extends MY_Model {

    function __construct() {
        parent::__construct();
        $this->table = 'person'; // table name
        $this->id = 'personId'; // primary key of the table
    }

    function getByHouseholdId ($householdId) {
        if (!is_numeric($householdId) || $householdId < 1) {
            return false;
        }

        $this->db->where('householdId', $householdId);
        $result = $this->db->get($this->table);

        if ($result->num_rows() > 0){
            return $result->result_array();
        }
        return false;
    }
}
