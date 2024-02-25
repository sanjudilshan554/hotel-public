<?php

namespace App\Http\Controllers;

use domain\Facades\HotelRoomFacade\HotelRoomFacade;
use Illuminate\Http\Request;
use Inertia\Inertia;
 
class HotelRoomController extends Controller
{
    public function index($id){
        return Inertia::render("HotelRooms/index");
    }

    public function get($hotelId){
        $response['hotel_rooms'] = HotelRoomFacade::get($hotelId);
        return $response;
    }
}
