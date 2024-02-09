<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Otlate extends Model
{
    use HasFactory;
    protected $table = 'otlate';
    protected $primaryKey = 'id_otlate';
    protected $fillable = [] ;
    protected $guarded = [] ;
}
