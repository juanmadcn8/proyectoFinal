<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Critica extends Model
{
    use HasFactory;
    protected $table = "criticas";
    protected $primaryKey = 'id';
    protected $fillable = ["nombrePelicula", "nombreUsuario", "comentario"];
    protected $guarded = [];
    public $timestamps = false;
}
