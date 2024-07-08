<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pendingreservations extends Model
{
    use HasFactory;

   protected $fillable =['customer_id' ,'firstname' , 'lastname' , 'address' ,'email' ,'phonenumber', 'tablenumber', 'scheduledate', 'scheduletime' , ];
}
