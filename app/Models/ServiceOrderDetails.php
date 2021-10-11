<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceOrderDetails extends Model
{
    use HasFactory;

    protected $table = "service_order_details";
    protected $guarded = [];
}
