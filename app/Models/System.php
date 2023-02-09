<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class System extends Model
{
    use HasFactory;
    protected $fillable = [
        'sys_cat', 'sys_sub_cat', 'sys_cd', 'sys_val', 'remark'
    ];
}
