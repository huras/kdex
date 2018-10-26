<?php

namespace Learning\Model;

use Illuminate\Database\Eloquent\Model;

class NodeRelation extends Model
{
    protected $table = 'node_relations';
    public $timestamps = true;
    protected $fillable = array('head_id','tail_id');

    public function Head(){
        return $this->belongsTo('Learning\Model\Node', 'head_id', 'id');
    }

    public function Tail(){
        return $this->belongsTo('Learning\Model\Node', 'tail_id', 'id');
    }
}
