<?php

namespace Learning\Model;

use Illuminate\Database\Eloquent\Model;
use Sofa\Eloquence\Eloquence;

class Node extends Model
{
    use Eloquence;

    protected $searchableColumns = ['name'];

    protected $table = 'skill_tree_node';
    public $timestamps = true;
    protected $fillable = array('name', 'type_id', 'short_description');

    public function Type(){
        return $this->belongsTo('Learning\Model\NodeType', 'type_id');
    }
}
