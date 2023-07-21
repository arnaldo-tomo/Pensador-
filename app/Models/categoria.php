<?php

namespace App\Models;

use App\Models\frase;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class categoria extends Model
{
    use HasFactory;
    protected $table = 'categorias';
    protected $fillable = ['nome'];

    public function frases(){
        return $this->belongsToMany(frase::class, 'categoria_frases');
    }

}
