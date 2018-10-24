<?php

namespace Learning\Model;

use Illuminate\Database\Eloquent\Model;

class NodeType extends Model
{
    protected $table = 'node_type';
    public $timestamps = true;
    protected $fillable = array('name');
}
