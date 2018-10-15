<?php

namespace App\Http\Controllers;

use DB;
use Request;
use App\Cake;
use Post;

class CakeController extends Controller
{

    protected $fillable = ['body'];

    public function index(){
        $cakes= DB::table('cakes')->latest()->get();
        $query = Request::get('q');
        $cakes = $query
  ? Cake::where('city', 'LIKE', "%$query%")->paginate(8)
  : Cake::paginate(8);
        return View('cake', compact ('cakes'));   
    }
    
    
   

    
}
