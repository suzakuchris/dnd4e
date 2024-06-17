<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feat extends Model
{
    use HasFactory;
    protected $table = 'feat';
    protected $primaryKey = 'ID';
    public $incrementing = false;
    public $timestamps = false;
}
