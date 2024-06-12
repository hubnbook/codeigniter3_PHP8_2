<?php

namespace models;

use CI_Loader;
use CI_Model;

class Room extends CI_Model
{

    private $roomId;
    private $code;
    private $name;
    private $description;
    private $buildDate;
    private $lastRenovatedDate;
    private $lastCleanDate;
    private $lastCleanTime;
    private $roomAt;


    function listDB(Room $room)
    {
        $this->load->database();

        $query = $this->db->query("SELECT * FROM room");

        return $query->result();
        
    }
}
