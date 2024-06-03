<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemMaster extends Model
{
    use HasFactory;
    protected $table = 'item_master';
    protected $primaryKey = 'item_master_id';

    public function itemType()
    {
        return $this->belongsTo(ItemType::class, 'item_type_id', 'type_id');
    }

    public function measurement()
    {
        return $this->belongsTo(Measurement::class, 'measure_id', 'measurement_id');
    }

    public function admin()
    {
        return $this->belongsTo(Admin::class, 'admin_id', 'admin_id');
    }

    public function department()
    {
        return $this->belongsTo(Department::class, 'dep_id', 'dep_id');
    }



}
