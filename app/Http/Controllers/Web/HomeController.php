<?php

namespace App\Http\Controllers\Web;
use App\Models\Hotels\Hotels;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index(){
      $hotels = Hotels::inRandomOrder()->limit(10)->get();
      return view('web.home', compact('hotels'));
    }


}
