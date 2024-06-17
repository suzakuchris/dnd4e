<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Race extends Model
{
    use HasFactory;
    protected $table = 'race';
    protected $primaryKey = 'ID';
    public $incrementing = false;
    public $timestamps = false;
}
