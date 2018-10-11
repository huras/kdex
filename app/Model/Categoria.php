<?php

namespace Learning\Model;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    public function produtos(){
        return $this->hasMany('Learning\Model\Produto');
    }
}
