<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;



class Department extends Model
{
    use SoftDeletes;
    use HasFactory;
    protected $primaryKey = 'dep_id';
    protected $table = 'departments';
}
