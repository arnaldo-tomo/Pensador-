<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class frase extends Model
{
    use HasFactory;
    protected $table = 'frases';
    protected $fillable = ['nome'];

    public function categoria(){
        return $this->belongsToMany(categoria::class, 'categoria_frases');
    }
}
