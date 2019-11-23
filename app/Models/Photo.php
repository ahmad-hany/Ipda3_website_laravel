<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model 
{

    protected $table = 'photos';
    public $timestamps = true;
    protected $fillable = array('url', 'extension', 'project_id');

    public function project()
    {
        return $this->belongsTo('App\Models\Project', 'project_id');
    }

}