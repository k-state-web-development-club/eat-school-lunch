<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ApplicationModel extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->table = 'application';
        $this->id = 'applicationId';
    }
}
