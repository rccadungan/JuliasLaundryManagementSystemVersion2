<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EodPosting extends Model
{
    use HasFactory;

    protected $table = "eod_posting";
    protected $guarded = [];
}
