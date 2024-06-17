<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deity extends Model
{
    use HasFactory;
    protected $table = 'deity';
    protected $primaryKey = 'ID';
    public $incrementing = false;
    public $timestamps = false;
}
