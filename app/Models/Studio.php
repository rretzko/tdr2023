<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Studio extends Model
{
    use HasFactory;

    public static function create()
    {
        $school = School::create(
            [
                'name' => 'My Private Studio #'.auth()->id(),
                'postal_code' => '07924',
            ]
        );

        auth()->user()->schools()->attach($school);
    }
}
