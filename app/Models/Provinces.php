<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Provinces extends Model
{
    protected $table = 'provinces';

    // use HasFactory;

    protected $fillable = [];

    public function amphures(){
        return $this->hasMany(Provinces::class);
    }
}