<?php

namespace App\Http\Controllers\Web;
use App\Models\Hotels\Hotels;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApiController extends Controller
{
    public function index($page){

      $url = "https://www.tatilsepeti.com/yurtici-oteller?sayfa=".$page;
      $ch = curl_init($url);
      curl_setopt($ch, CURLOPT_HEADER, 0);
      curl_setopt($ch,CURLOPT_RETURNTRANSFER, 1);
      $result = curl_exec($ch);
      curl_exec($ch);
      curl_close($ch);

      preg_match_all('@<script (.*?)>(.*?)</script>@Ssie', $result, $content);

      $decode =  json_decode($content[2][5],true);;
      foreach($decode['itemListElement'] as $row){
        $hotels = new Hotels();
        $hotels->hotel_name = $row['item']['name'];
        $hotels->address = $row['item']['address'][0]['streetAddress'];
        $hotels->phoneNumber = $row['item']['telephone'];
        $hotels->price = str_replace(' TRY', '',$row['item']['priceRange']) == '' ?:0.00;
        $hotels->url = $row['item']['url'];
        $hotels->image = $row['item']['image'];
        $hotels->type = 0;
        $hotels->save();
      }
    }

    public function ara($bas, $son, $yazi)
    {
    	@preg_match_all('/' . preg_quote($bas, '/') .
    	'(.*?)'. preg_quote($son, '/').'/i', $yazi, $m);
    	return @$m;
    }


    public function start(){
      for($i = 211;$i<350;$i++){
        $this->index($i);
      }
    }
}
