<?php

namespace App\Http\Controllers;

use DB;
use Request;
use App\Jewelrys;
use Post;

class JewelryController extends Controller
{

    protected $fillable = ['body'];

    public function index(){
        $jewelrys= DB::table('jewelrys')->latest()->get();
        $query = Request::get('q');
        $jewelrys = $query
  ? Jewelrys::where('city', 'LIKE', "%$query%")->paginate(8)
  : Jewelrys::paginate(8);
        return View('jewelry', compact ('jewelrys'));   
    }
    
    
   

    
}
