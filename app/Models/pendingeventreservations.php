<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pendingeventreservations extends Model
{
    use HasFactory;
    protected $fillable =['customer_id' ,'firstname' , 'lastname' , 'address' ,'email' ,'phonenumber', 'guesses','venue', 'package', 'specialrequest', 'scheduledate', 'scheduletime','packageprice' , 'venueprice', 'isadmin', 'additionalguest' , "venueaddon" ];

}
