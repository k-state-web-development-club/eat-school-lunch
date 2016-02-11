<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Application extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    // URL: http://<username>.atodd.me
    public function index() {
        // This is the home page
        $this->twig->display('welcome_message', array('testVariable' => "Hello, World!"));
    }

    // URL: http://<username>.atodd.me/about
    public function about() {
        $this->twig->display('about', array('testVariable' => "Hello, World!"));
    }
}
