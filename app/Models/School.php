<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    use HasFactory;

    protected $fillable = ['address1','address2','city','county_id','geostate_id','name','postal_code'];

    /**
     * Return uppercase first letter of each word in school name
     * @return string
     */
    public function getAbbrAttribute(): string
    {
        $parts = explode(' ',$this->name);
        $str = '';

        foreach($parts AS $part){

            $str .= strtoupper(substr($part,0,1));
        }

        return $str;
    }

    public function getShortNameAttribute(): string
    {
        $name = $this->name;
        $name = str_replace('Studio','S', $name);

        return $name;
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
