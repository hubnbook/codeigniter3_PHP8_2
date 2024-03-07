<?php

class UserProcess extends CI_Model
{

    public function index()
    {
        echo "Function: " . __FUNCTION__ . " in Class of " . __CLASS__ . "<br>";

        $this->load->model("UserModel");

        $u = new UserModel();
        $u->index();
    }
}
