<?php

class UserProcess extends CI_Model
{

    public function index()
    {
        $u = new UserModel();
        $u->index();

        echo base_url();
    }
}
