<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Terrain extends Model
{
    use HasFactory;
    protected $table = 'terrain';
    protected $primaryKey = 'ID';
    public $incrementing = false;
    public $timestamps = false;
}
