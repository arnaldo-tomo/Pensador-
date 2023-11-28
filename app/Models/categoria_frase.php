<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categoria_frase extends Model {
    use HasFactory;

    protected $table = 'categoria_frases';
    protected $fillable = [ 'frase_id ', 'categoria_id' ];
}