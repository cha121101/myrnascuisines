<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eventhall extends Model
{
    use HasFactory;
    protected $fillable =["picture" ,"description", "price", "time" , "capacity" , "amenities"];
    public $table = "eventhall";
}