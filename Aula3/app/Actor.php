<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    protected $table = 'actors';

    public function getNomeCompleto($id)

    {
        $espaco = " ";
        $nomeCompleto = $this->first_name. $espaco. $this->last_name;
        return $nomeCompleto;
    }


}
