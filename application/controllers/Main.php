<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Main extends CI_Controller
{

    public function index()
    {

        $this->load->view('welcome_message');

        // try {

            $this->load->database();

            $this->load->model("process\UserProcess");

            $up = new UserProcess();
            $up->index();
        // } catch (Exception $ex) {
        //     echo "RuntimeException Error: " . print_r($ex->getTraceAsString(), true);
        // }
    }
}
