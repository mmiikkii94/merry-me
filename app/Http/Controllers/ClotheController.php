<?php

namespace App\Http\Controllers;

use DB;
use Request;
use App\Clothe;
use Post;

class ClotheController extends Controller
{

    protected $fillable = ['body'];

    public function index(){
        $clothes= DB::table('clothes')->latest()->get();
        $query = Request::get('q');
        $clothes = $query
  ? CLothe::where('genres', 'LIKE', "%$query%")->paginate(8)
  : Clothe::paginate(8);
        return View('clothe', compact ('clothes'));   
    }
    
    
   

    
}
