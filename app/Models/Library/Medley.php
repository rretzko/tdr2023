<?php

namespace App\Models\Library;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medley extends Model
{
    use HasFactory;

    protected $fillable = ['arrangement_type_id', 'medley_id', 'subtitle', 'title'];
}
