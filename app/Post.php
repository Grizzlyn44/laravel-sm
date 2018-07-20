<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    protected $fillable = ['title', 'text', 'slug'];

	public function user() {
		return $this->belongsTo('App\User');
	}

    public function getCreatedAtAttribute($value) {
    	return date('j M Y, G:i', strtotime($value));
    }

    public function getTeaserAttribute() {
    	return str_limit($this->text, 300);
    }

    public function tags() {
    	return $this->belongsToMany('App\Tag');
    }

    public function setTitleAttribute($value) {
        $this->attributes['title'] = $value;
        $this->attributes['slug'] = str_slug($value);
    }
}
