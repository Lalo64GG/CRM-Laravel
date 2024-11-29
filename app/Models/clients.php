<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class clients extends Model
{
    use HasFactory;

    /**
     * Los atributos que se pueden asignar masivamente.
     *
     * @var array<int, string>
     */

     protected $fillable = [
        'name',
        'lastname',
        'email',
        'phone',
        'address',
        'client_type',
        'industry',
        'status',
        'interaction_history',
     ];

    /**
     * Los atributos que deben ser casteados.
     *
     * @var array<string, string>
     */

     protected $cast = [
        'interaction_history' => 'array', //* Nos ayuda a poder manejar el JSON como un array
     ];

}
