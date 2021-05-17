<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $guarded = ['create_at','update_at'];
    protected $date = [
        'pulished_at'
    ];
    public function category(){
        return $this->belongsTo('App\Models\Category');
    }
}
