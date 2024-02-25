<?php

namespace App\Http\Controllers;

use domain\Facades\HotelFacade\HotelFacade;
use Illuminate\Http\Request;
use Inertia\Inertia;

class HotelController extends Controller
{
    public function index(){
        return Inertia::render("Hotels/index");
    }

    public function all(){
        return HotelFacade::all();
    }

    public function get($id){
        $response['hotel']=HotelFacade::get($id);
        return inertia::render('HotelRooms/index', $response);
    }
}
