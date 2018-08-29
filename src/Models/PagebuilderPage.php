<?php

namespace Xeight8\Kladmin\Models;

use Illuminate\Database\Eloquent\Model;

class PagebuilderPage extends Model
{   
	public $rules = [
		'title' => 'required',
		'slug' => 'required|unique:pagebuilder_pages'
	];

    protected $fillable = ['slug', 'title'];
}