<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penyewa extends Model
{
    use HasFactory;
    protected $table = 'penyewa';

//Memastikan primarykey
    protected $primaryKey = 'id_penyewa';
    protected $fillable = [] ;
    protected $guarded = [] ;
}
