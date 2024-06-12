<?php
//use core\Controllers;

use model\Room;

defined('BASEPATH') or exit('No direct script access allowed');

class Main extends CI_Controller
{
    // public $UserProcess;
    public $user;
    public $upload;

    public function __construct()
    {
        parent::__construct();
        $this->load->helper(
            array(
                "form",
                "url"
            )

        );
    }

    public function index($action = "", $process = "")
    {
        try {

            // $action = $this->input->post_get("action");

            switch ($action) {
                case "room":
                    $rp = new \models\process\Room();
                    $rp->index();
                    break;
                case "user":
                    $up = new UserProcess();
                    $up->index($do = "", array());
                    break;
                default:
                    $this->home();
                    break;
            }
        } catch (RuntimeException $ex) {
        }
    }

    public function home()
    {
        $this->load->model("UserModel", "user");

        $s = $this->user->listDB(new UserModel);

        $this->load->view('welcome_message', array("student" => $s));
    }

    public function do_upload()
    {
        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 10000000;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('userfile')) {
            $error = array('error' => $this->upload->display_errors());
            print_r($error);
            $this->load->view('welcome_message', $error);
        } else {
            $data = array('upload_data' => $this->upload->data());

            $this->load->view('upload/upload_success', $data);
        }
    }
}
