<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service_provider extends Model
{
    use HasFactory;
    protected $table='service_providers';
    protected $guarded =[];
}
