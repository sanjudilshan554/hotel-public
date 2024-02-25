<?php 

namespace domain\Services\HotelService;
use App\Models\Hotel;

class HotelService {

    protected $hotels;

    public function __construct(){
        $this->hotels = new Hotel();
    }

    public function all(){
        return $this->hotels->with('hotelImages','hotelRooms', 'hotelType')->get();
    }

    public function get($id){
        return $this->hotels->where('id',$id)->with('hotelImages','hotelRooms', 'hotelType')->get();
    }
}