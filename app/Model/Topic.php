<?php

namespace Learning\Model;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    public function notes(){
        return $this->hasMany('Learning\Model\ItemNote');
    }

    public function parents(){
        return $this->belongsToMany('Learning\Model\Topic', 'topic_parentings', 'id', 'parent_id');
    }

    public function childs(){
        return $this->belongsToMany('Learning\Model\Topic', 'topic_parentings', 'id', 'child_id');        
    }
}
