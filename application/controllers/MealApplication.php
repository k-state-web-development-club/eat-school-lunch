<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MealApplication extends CI_Controller {

    function index() {
        $this->twig->display('welcome_message', array('testVariable' => "Hello, World!"));
    }

}
