<?php
//use core\Controllers;

defined('BASEPATH') or exit('No direct script access allowed');

class Main extends CI_Controller
{
    // public $UserProcess;
    public $user;

    public function __construct()
    {   
        parent::__construct();
        // $this->UserProcess = new UserProcess();
    }

    public function index()
    {
        try {

            $this->load->helper(
                "url"
            );

            $this->load->model("UserModel", "user");

            // echo base_url("");

            // $this->load->view('errors/html/error_404', array("heading" => "Fuck Man", "message" => "Yes...."));
            $s = $this->user->listDB(new UserModel);
            
            // echo "<pre>";
            // print_r($s);
            // echo "</pre>";

            // echo "Run UserProcess<br>";
            // $this->load->model("process/UserProcess");

            $up = new UserProcess();
            $up->index();

            
            $this->load->view('welcome_message', array("student"=> $s));

        } catch (RuntimeException $ex) {
        }
    }
}
