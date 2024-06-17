<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trap extends Model
{
    use HasFactory;
    protected $table = 'trap';
    protected $primaryKey = 'ID';
    public $incrementing = false;
    public $timestamps = false;
}
