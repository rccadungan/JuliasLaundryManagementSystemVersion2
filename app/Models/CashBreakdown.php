<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CashBreakdown extends Model
{
    use HasFactory;

    protected $table = "cash_breakdowns";
    protected $guarded = [];
}
