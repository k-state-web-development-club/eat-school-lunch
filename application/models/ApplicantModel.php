<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ApplicantModel extends MY_Model{

  function __construct(){
    parent::__construct();
    $this->table = 'applicant';
    $this->id = 'applicantId';
  }

  function getByApplicantId($applicantId){
    if (!is_numeric($applicantId) || $applicantId < 1) {
        return false;
    }

    // select * from `applicant` where `applicantId` = '$applicantId'
    $this->db->where('applicantId', $applicantId);

    // Run the query on 'applicant' and get the result
    $result = $this->db->get($this->table);

    if ($result->num_rows() === 1) {
        return $result->row_array();
    }
    return false;
  }

  function getByHousholdId($householdId){
    if (!is_numeric($householdId) || $householdId < 1) {
        return false;
    }

    // select * from `applicant` where `applicantId` = '$applicantId'
    $this->db->where('householdId', $householdId);

    // Run the query on 'applicant' and get the result
    $result = $this->db->get($this->table);

    if ($result->num_rows() > 0) {
        return $result->result_array();
    }
    return false;
  }

  function getByPhone($phone){
    if (!is_numeric($phone) || $phone < 1) {
        return false;
    }
    $this->db->where('phone', $phone);
    $result = $this->db->get($this->table);

    if ($result->num_rows() === 1) {
        return $result->row_array();
    }
    return false;
  }

}
