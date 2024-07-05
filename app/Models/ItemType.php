<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemType extends Model
{
    use HasFactory;
    protected $primaryKey = 'ItemType';
    protected $table = 'item_types';
    
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'cat_id');
    }
    public function itemMaster()
    {
        return $this->hasMany(ItemMaster::class, 'item_type_id', 'type_id');
    }
}
