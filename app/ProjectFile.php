<?php

namespace App;

use Illuminate\Database\Eloquent\Model as BaseModel;

class ProjectFile extends BaseModel
{
    protected $fillable=['project_id','name','path'];

    public function project(){
        return $this->belongsTo('App\Project');
    }
}
