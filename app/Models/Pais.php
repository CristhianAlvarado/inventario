<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pais extends Model
{
    protected $fillable = ['id','descripcion','activo'];
    protected $primaryKey = 'id';
    protected $keyType = 'char';
    public $incrementing = false;
    public $timestamps = false;
    
    use HasFactory;
}
