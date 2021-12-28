<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
   
    protected $guarded=[];

    // category method build for making  relation between category and services 
    public function category(){
        return $this->belongsTo(Categories::class);
    }
}
