<?php

namespace domain\Services\HotelRoomService;
use App\Models\HotelRooms;

class HotelRoomService{

    public function __construct(){
        $this->hotel_room = new HotelRooms();
    }

    public function get(){
        
    }
}