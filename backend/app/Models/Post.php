<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable=[
        "titel",
        "body",
        "image",
        "categorie_id",
        "user_id"
    ];
/*
     ou bien

    protected $guarded=[];
*/
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function Categorie(){
        return $this->belongsTo(Categorie::class);
    }

    public function Comments(){
        return $this->hasMany(Comments::class);
    }
}
