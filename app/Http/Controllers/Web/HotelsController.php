<?php

namespace App\Http\Controllers\Web;
use App\Models\Hotels\Hotels;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HotelsController extends Controller
{
    public function index(){
      return view('web.hotels.index');
    }

    public function thermal_hotel(Request $request){
      $hotels = Hotels::paginate(20);
      return view('web.hotels.thermal-hotels', compact('hotels'));
    }
}
