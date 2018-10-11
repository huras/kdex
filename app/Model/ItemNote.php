<?php

namespace Learning\Model;

use Illuminate\Database\Eloquent\Model;

class ItemNote extends Model
{
    protected $fillable = array('content', 'topic_id');

    public function topic(){
        return $this->belongsTo('Learning\Model\Topic', 'topic_id');
    }
}
