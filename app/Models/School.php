<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    use HasFactory;

    protected $fillable = ['address1','address2','city','county_id','geostate_id','name','postal_code'];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
