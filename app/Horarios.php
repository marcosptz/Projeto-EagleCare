<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Horarios extends Model
{
    protected $fillable = [
        'pessoa_id', 'horario', 'remedio', 'dosagem', 'valor'
    ];

    public function pessoa()
    {
        return $this->hasOne(Pessoas::class, 'id', 'pessoa_id');
    }
}
