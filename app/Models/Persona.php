<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;

    protected $primarykey = 'ci';
    public $incrementing = false;

    public function getKeyName(){
        return "ci";
    }

    protected $fillable = [
        'ci',
        'nombres',
        'apellidos',
    ];
}
