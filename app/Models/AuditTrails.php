<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AuditTrails extends Model
{
    use HasFactory;
    protected $fillable =['admin_name' , 'action' , 'customer_id', 'customer_name' ,'reservation_type', 'time_of_action'];
    public $table = "audittrails";
}
