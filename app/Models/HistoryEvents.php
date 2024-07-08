<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistoryEvents extends Model
{
    use HasFactory;
    protected $fillable =[ 'firstname' , 'lastname' , 'address' ,'email' ,'phonenumber', 'guesses','venue', 'package', 'specialrequest', 'scheduledate', 'scheduletime','packageprice' , 'venueprice', 'isadmin', 'additionalguest' , "venueaddon", 'customer_id' ];
    public $table = "historyevents";
}

