<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Distrito extends Model
{
    protected $fillable = ['id','provincia_id','descripcion','activo'];
    protected $primaryKey = 'id';
    protected $keyType = 'char';
    public $incrementing = false;
    public $timestamps = false;
    use HasFactory;

    public function provincia(){
        return $this->belongsTo(Provincia::class);
    }
}
