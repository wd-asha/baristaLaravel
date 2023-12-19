<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoryMenu extends Model
{
    protected $table = 'category_menus';
    protected $guarded = [];

    public function menuItem()
    {
        return $this->hasMany(MenuItem::class);
    }
}
