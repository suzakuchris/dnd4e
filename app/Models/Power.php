<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Power extends Model
{
    use HasFactory;
    protected $table = 'power';
    protected $primaryKey = 'ID';
    public $incrementing = false;
    public $timestamps = false;
}
