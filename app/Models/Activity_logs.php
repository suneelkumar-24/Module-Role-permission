<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity_logs extends Model
{
    protected $table = 'activity_log';
    public $timestamps = false;
    use HasFactory;
}
