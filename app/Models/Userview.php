<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Userview extends Model
{
    use HasFactory;
    protected $fillable =[ 'herocarousel' , 'table' , 'event', 'description_about','restaurant', 'package' ,'gazebo', 'pool' ,'event_hall' ,'picture_promo', 'client'];
    public $table = "userview";
}
