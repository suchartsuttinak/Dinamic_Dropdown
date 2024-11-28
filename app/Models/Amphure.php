<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Amphure extends Model
{

    protected $table = 'amphures';
    protected $guarded = [];

    
    public function tambons(){
        return $this->hasMany(Tambon::class);
    }

    public function province(){
        return $this->belongsTo(Provinces::class);
    }
}