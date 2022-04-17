<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModuloLevel extends Model
{
    protected $fillable = ['descripcion','idModulo'];
    public $timestamps = false;
    use HasFactory;

    //Relacion unos a muchos inversa
    public function modulo(){
        return $this->belongsTo(Modulo::class);
    }

    public function users(){
        return $this->belongsToMany(User::class);
    }
}
