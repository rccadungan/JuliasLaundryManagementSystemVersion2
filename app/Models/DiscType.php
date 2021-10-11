<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DiscType extends Model
{
    use HasFactory;

    protected $table = "disc_types";
    protected $guarded = [];
}
