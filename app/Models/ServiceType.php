<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceType extends Model
{
    use HasFactory;

    protected $table = "service_types";
    protected $guarded = [];

    public function discType()
    {
        return $this->hasOne(DiscType::class, 'tos_id', 'id');
    }
}
