<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provincia extends Model
{
    protected $fillable = ['id','departamento_id','descripcion','activo'];
    protected $primaryKey = 'id';
    protected $keyType = 'char';
    public $incrementing = false;
    public $timestamps = false;
    use HasFactory;

    public function departamento(){
        return $this->belongsTo(Departamento::class);
    }

    public function distritos(){
        return $this->hasMany(Distrito::class);
    }
}
