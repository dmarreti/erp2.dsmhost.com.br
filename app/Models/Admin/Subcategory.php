<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    protected $fillable = [
        'subcategory_name',
        'subcategory_slug',
        'category_id',
    ];
}
