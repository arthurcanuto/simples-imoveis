<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $primaryKey = 'IdClientes'; 

    protected $fillable = [
        'nome',
        'email',
        'telefone'
    ];

    public function imoveis()
    {
        return $this->hasMany(Imovel::class, 'cliente_id', 'IdClientes');
    }
}