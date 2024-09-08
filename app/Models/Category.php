<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Category extends Model
{
    use HasFactory,SoftDeletes;
    protected $table = 'categories';
    protected $primaryKey = 'cat_id';

    public function itemTypes()
    {
        return $this->hasMany(ItemType::class, 'category_id', 'cat_id');
    }
}
