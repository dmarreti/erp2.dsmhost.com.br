<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Category extends Model
{
    protected $fillable = [
        'name',
        'slug'
    ];

    public function setSlug()
    {
        if(!empty($this->name)){
            $this->attributes['slug'] = Str::slug($this->name);
            $this->save();
        }
    }

}
