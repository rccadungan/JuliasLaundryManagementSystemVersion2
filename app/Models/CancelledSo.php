<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CancelledSo extends Model
{
    use HasFactory;

    protected $table = "cancelled_sos";
    protected $guarded = [];
}
