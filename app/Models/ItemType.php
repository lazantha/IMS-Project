<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class ItemType extends Model
{
    use HasFactory,SoftDeletes;
    // protected $primaryKey = 'ItemType';
    
    protected $primaryKey = 'type_id';
    protected $table = 'item_types';
    
    protected $fillable = ['type_name', 'type_code', 'is_active'];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'cat_id');
    }
    public function itemMaster()
    {
        return $this->hasMany(ItemMaster::class, 'item_type_id', 'type_id');
    }
}
