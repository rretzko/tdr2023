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
                'name' => 'My Home Studio #'.auth()->id(),
                'city' => 'Bernardsville',
                'postal_code' => '07924',
            ]
        );

        Tenure::create(
            [
                'user_id' => auth()->id(),
                'school_id' => $school->id,
                'start' => date('Y'),
            ],
        );
    }
}
