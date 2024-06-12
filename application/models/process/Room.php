<?php

namespace models\process;

use CI_Model;

class Room extends CI_Model
{

    public function index()
    {
        $room = new \models\Room;

        $r = $room->listDB($room);
        echo "<pre>";
        print_r($r);
        echo "</pre>";
    }
}