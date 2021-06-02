<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Responsavel extends Model
{

  protected $table = "responsavel";

  public function aluno()
    {
        return $this->belongsTo(Aluno::class,'resp_id','id');
    }
}