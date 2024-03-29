<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model 
{

    protected $table = 'settings';
    public $timestamps = true;
    protected $fillable = array('header_logo', 'footer_logo', 'slogan', 'intro_image', 'address', 'fb_link', 'tw_link', 'github_link', 'whatsapp_number');

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

}