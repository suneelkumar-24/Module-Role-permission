<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RolesModule extends Model
{
    protected $fillable = [
        'role_id',
        'module_id'
    ];
    use HasFactory;
}
