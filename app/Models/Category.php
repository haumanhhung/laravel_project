<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'id','name'

    ];
    protected static function booted(){
        static::creating(function($name){
            $name->name = strtoupper($name->name);
        });
    }
    public function post(){
        return $this->HasMany('App\Models\Post');
    }
    
}
