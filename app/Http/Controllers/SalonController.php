<?php

namespace App\Http\Controllers;

use DB;
use Request;
use App\Salon;
use Post;


class SalonController extends Controller
{


    protected $fillable = ['body'];

    public function index(){
        $salons= DB::table('salons')->latest()->get();
        $query = Request::get('q');
        $salons = $query
  ? Salon::where('city', 'LIKE', "%$query%")->paginate(8)
  : Salon::paginate(8);
        return View('salon', compact ('salons'));   
    }
    
    
      
    

     


}




