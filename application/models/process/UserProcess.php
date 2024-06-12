<?php

class UserProcess extends CI_Model
{

    public function index($do, $paramter)
    {

        $this->load->view("user/user_list", $paramter);
    }
}
