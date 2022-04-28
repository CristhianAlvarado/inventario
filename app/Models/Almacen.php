<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Almacen extends Model
{
    protected $fillable = ['descripcion','pais_id','departamento_id','provincia_id','distrito_id','direccion','email','telefono','codigo_fiscal','direccion_fiscal','logo','info_add','empresa_id', 'estado'];
    use HasFactory;

    public function empresa(){
        return $this->belongsTo(Empresa::class);
    }

    public function tipocdps(){
        return $this->belongsToMany(TipoCdp::class);
    }

    public function series(){
        return $this->hasMany(Serie::class);
    }
}
