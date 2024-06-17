<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParagonPath extends Model
{
    use HasFactory;
    protected $table = 'paragonpath';
    protected $primaryKey = 'ID';
    public $incrementing = false;
    public $timestamps = false;
}
