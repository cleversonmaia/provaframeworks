<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{   //  protected $table = 'nomequalqer'; isso seria para especificar um nome diferente para tabela
    protected $fillable = ['nome'];

    public function temporadas() {
        return $this->hasMany(Temporada::class);
    }
}
