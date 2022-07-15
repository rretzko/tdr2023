<?php

namespace App\Models\Library;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Copytype extends Model
{
    use HasFactory;

    protected $fillable = ['descr','help'];
}
