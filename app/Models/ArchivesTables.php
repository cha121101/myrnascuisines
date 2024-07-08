<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArchivesTables extends Model
{
    use HasFactory;
    protected $fillable =[ 'firstname' , 'lastname' , 'address' ,'email' ,'phonenumber', 'tablenumber', 'scheduledate', 'scheduletime', 'customer_id' ];
    public $table = "archives_tables";
}
