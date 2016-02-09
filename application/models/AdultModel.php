<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdultModel extends MY_Model {

    // ssh <username>@atodd.me
    // cd into project directory (eat-school-lunch)
    // git status <-- make sure you're on your master branch
    // git fetch upstream <-- let us know if you have issues
    // git rebase upstream/master
    // git push origin master
    //

    function __construct() {
        parent::__construct();
        $this->table = 'adult'; // table name
        $this->id    = 'adultId'; // primary key of the table
    }

    function getByPersonId($personId) {

        // Simple error checking
        if (!is_numeric($personId) || $personId < 1) {
            return false;
        }

        // select * from `adult` where `personId` = '$personId'
        $this->db->where('personId', $personId);

        // Run the query on 'adult' and get the result
        $result = $this->db->get($this->table);

        if ($result->num_rows() === 1) {
            return $result->row_array();
        }
        return false;
    }
}
