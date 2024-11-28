<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tambon extends Model
{
    // use HasFactory;

    protected $guarded = [];

    public function amphur(){
        return $this->belongsTo(Amphur::class);
    }
}