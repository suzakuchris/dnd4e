<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EpicDestiny extends Model
{
    use HasFactory;
    protected $table = 'epicdestiny';
    protected $primaryKey = 'ID';
    public $incrementing = false;
    public $timestamps = false;
}
