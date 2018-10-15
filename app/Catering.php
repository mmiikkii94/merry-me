<?php

namespace App;
    
use Illuminate\Database\Eloquent\Model;
use App\Post;
class Catering extends Model
{

   
    public function scopeSearch($query, $s){
        return $query->where('foodtype', 'like', '%' .$s. '%');
    }
    
    public function comments(){
        return $this->hasMany(Comment::class);
    }
    


    

}


