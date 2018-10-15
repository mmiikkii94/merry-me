<?php

namespace App\Http\Controllers;

use DB;
use Request;
use App\Catering;
use Post;

class CateringController extends Controller
{

    protected $fillable = ['body'];

    public function index(){
        $caterings= DB::table('caterings')->latest()->get();
        $query = Request::get('q');
        $caterings = $query
  ? Catering::where('foodtype', 'LIKE', "%$query%")->paginate(8)
  : Catering::paginate(8);
        return View('catering', compact ('caterings'));   
    }
    
    
   

    
}
