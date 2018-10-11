<?php

namespace Learning\Model;

use Illuminate\Database\Eloquent\Model;
use Learning\Model\Categoria;

class Produto extends Model
{
    protected $table = 'produtos';
    public $timestamps = false;
    protected $fillable = array('nome', 'valor', 'descricao', 'quantidade', 'tamanho', 'categoria_id');

    public function categoria(){
        return $this->belongsTo('Learning\Model\Categoria', 'categoria_id');
    }
}