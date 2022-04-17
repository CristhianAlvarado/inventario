<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modulo extends Model
{
    protected $fillable = ['descripcion','order_menu'];
    public $timestamps = false;
    use HasFactory;

    //Relacion una a muchos con modulo levels
    public function levels(){
        return $this->hasMany(ModuloLevel::class);
    }

    public function users(){
        return $this->belongsToMany(User::class);
    }

}
