<?php

namespace Learning\Model;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    public function notes(){
        return $this->hasMany('Learning\Model\ItemNote');
    }
}
