<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable=[
        "titel",
        "body"
    ];

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
