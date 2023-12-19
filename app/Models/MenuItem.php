<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    protected $table = 'menu_items';
    protected $guarded = [];

    public function categoryMenu()
    {
        return $this->belongsTo(CategoryMenu::class);
    }
}
