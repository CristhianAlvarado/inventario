<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoCdp extends Model
{
    protected $fillable = ['numero','descripcion'];
    public $timestamps = false;
    use HasFactory;

    public function series(){
        return $this->hasMany(Serie::class);
    }
}