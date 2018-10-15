<?php

namespace App\Http\Controllers;

use DB;
use Request;
use App\Music;
use Post;

class MusicController extends Controller
{

    protected $fillable = ['body'];

    public function index(){
        $musics= DB::table('musics')->latest()->get();
        $query = Request::get('q');
        $musics = $query
  ? Music::where('genres', 'LIKE', "%$query%")->paginate(8)
  : Music::paginate(8);
        return View('music', compact ('musics'));   
    }
    
    
   

    
}
