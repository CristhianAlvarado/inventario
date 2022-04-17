<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Configuracion extends Model
{
    protected $fillable = ['envio_auto','whatsapp','visual','facebook','instagram','linkedin','navbar','logo','empresa_id'];
    public $timestamps = false;
    use HasFactory;

    public function empresa(){
        return $this->belongsTo(Empresa::class);
    }
}
