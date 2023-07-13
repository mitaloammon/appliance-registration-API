<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class eletrodomestico extends Model
{

    protected $table = 'eletrodomestico';

    protected $fillable = ['id', 'nome', 'tensao', 'descricao', 'marca'];

    use HasFactory;
}
