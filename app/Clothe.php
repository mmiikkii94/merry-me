<?php

namespace App;
    
use Illuminate\Database\Eloquent\Model;
use App\Post;
class Clothe extends Model
{

   
    public function scopeSearch($query, $s){
        return $query->where('city', 'like', '%' .$s. '%');
    }
    
    public function comments(){
        return $this->hasMany(Comment::class);
    }
    


    

}


