<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Class4e extends Model
{
    use HasFactory;
    protected $table = 'class';
    protected $primaryKey = 'ID';
    public $incrementing = false;
    public $timestamps = false;
}
