<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instancia extends Model
{
    use HasFactory;

    protected $table  = "instancia";

    protected $primaryKey = "id_instancia";


    protected $fillable = ['estado'];

    protected $hidden = ['id_instancia'];
}
