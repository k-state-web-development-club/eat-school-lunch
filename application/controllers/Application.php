<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Application extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    // URL: http://<username>.atodd.me
    function index() {
        // The $data array will be passed to the view
        // and it's values can be accessed through their
        // corresponding key
        $data = array(
            'testVariable' => 'Hello, World!'
        );
        $this->twig->display('welcome_message', $data);
    }

    // URL: http://<username>.atodd.me/about
    function about() {
        $data = array(
            'testVariable' => 'Hello, World!'
        );
        $this->twig->display('about', $data);
    }

    // URL: http://<username>.atodd.me/step/$1
    function step($stepNum = false) {
        $data = array(
            'testVariable' => 'Hello, World!'
        );

        // If no step number was provided, 404
        if (!$stepNum)
            show_404();

        // Similarly, 404 if there was one but
        // we do not have a view for that step
        if (!file_exists(APPPATH.'views/steps/'.$stepNum.'.twig'))
            show_404();

        $this->twig->display('steps/'.$stepNum, $data);
    }

}
