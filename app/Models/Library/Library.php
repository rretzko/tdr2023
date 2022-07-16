<?php

namespace App\Models\Library;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Library extends Model
{
    use HasFactory;

    protected $fillable = ['name','school_id','user_id'];

    public function compositions()
    {
        return $this->belongsToMany(Composition::class);
    }

}
