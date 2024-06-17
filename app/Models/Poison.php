<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Poison extends Model
{
    use HasFactory;
    protected $table = 'poison';
    protected $primaryKey = 'ID';
    public $incrementing = false;
    public $timestamps = false;
}
