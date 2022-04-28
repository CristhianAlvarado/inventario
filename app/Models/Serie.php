<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
    protected $fillable = ['id','almacen_id','tipocdp_id','numero'];
    public $timestamps = false;
    use HasFactory;

    public function tipocdp(){
        return $this->belongsTo(TipoCdp::class);
    }

    public function almacen(){
        return $this->belongsTo(Almacen::class);
    }
}
