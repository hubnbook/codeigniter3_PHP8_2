<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends \core\CI_Controller {

    public function index(){

        $this->load->view('welcome_message');

        $this->load->database();
    }
}