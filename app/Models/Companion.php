<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Companion extends Model
{
    use HasFactory;
    protected $table = 'companion';
    protected $primaryKey = 'ID';
    public $incrementing = false;
    public $timestamps = false;
}
