<?php

namespace App;
    
use Illuminate\Database\Eloquent\Model;
use App\Post;
class Music extends Model
{

   
    public function scopeSearch($query, $s){
        return $query->where('genres', 'like', '%' .$s. '%');
    }
    
    public function comments(){
        return $this->hasMany(Comment::class);
    }
    


    

}


