<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $fillable = ['ruc','razon_social','direccion','correo','telefono'];
    public $timestamps = false;
    use HasFactory;

    //Relacion muchos a muchos inversa
    public function users(){
        return $this->belongsToMany(User::class);
    }

    public function configuraciones(){
        return $this->hasMany(Configuracion::class);
    }

    public function almacenes(){
        return $this->hasMany(Almacen::class);
    }
}
