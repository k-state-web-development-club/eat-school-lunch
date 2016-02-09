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
//get by householdId
  function getByHouseholdId($householdId){
    if (!is_numeric($householdId) || $householdId < 1) {
        return false;
    }
    $this->db->where('householdId', $householdId);
    $result = $this->db->get($this->table);
    if ($result->num_rows() > 0) {
        return $result->result_array();
    }
    return false;
  }
//get by phone number
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

  //get by email
  function getByEmail($email){
    if (!is_numeric($email) || $email < 1) {
        return false;
    }
    $this->db->where('email', $email);
    $result = $this->db->get($this->table);

    if ($result->num_rows() === 1) {
        return $result->row_array();
    }
    return false;
  }

}
