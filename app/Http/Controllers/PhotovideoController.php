<?php

namespace App\Http\Controllers;

use DB;
use Request;
use App\Photovideo;
use Post;

class PhotovideoController extends Controller
{

    protected $fillable = ['body'];

    public function index(){
        $photovideos= DB::table('photovideos')->latest()->get();
        $query = Request::get('q');
        $photovideos = $query
  ? Photovideo::where('city', 'LIKE', "%$query%")->paginate(8)
  : Photovideo::paginate(8);
        return View('photovideo', compact ('photovideos'));   
    }
    
    
   

    
}
