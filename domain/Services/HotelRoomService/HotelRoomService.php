<?php

namespace domain\Services\HotelRoomService;
use App\Models\HotelRooms;

class HotelRoomService{

    protected $hotel_room;

    public function __construct(){
        $this->hotel_room = new HotelRooms();
    }

    public function get($hotelId){
        return $hotel_room = $this->hotel_room
            ->where('hotel_id',$hotelId)
            ->with('roomType')
            ->get();
    }
}