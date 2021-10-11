<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CreditMemo extends Model
{
    use HasFactory;

    protected $table = "credit_memos";
    protected $guarded = [];
}
