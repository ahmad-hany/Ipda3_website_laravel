<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Page extends Model 
{

    protected $table = 'pages';
    public $timestamps = true;
    protected $fillable = array('title', 'content', 'image', 'show_in_menu', 'slug');

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

}