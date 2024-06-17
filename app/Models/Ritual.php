<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ritual extends Model
{
    use HasFactory;
    protected $table = 'ritual';
    protected $primaryKey = 'ID';
    public $incrementing = false;
    public $timestamps = false;
}
