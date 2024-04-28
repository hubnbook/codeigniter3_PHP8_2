<?php

class UserModel extends CI_Model
{
    function index()
    {
        // echo "function " . __FUNCTION__ . " in class " . __CLASS__ ."<br>";
    }

    function listDB(UserModel $user){

        $this->load->database();

        $query = $this->db->query("SELECT * FROM student");

        return $query->result();


    }
}
