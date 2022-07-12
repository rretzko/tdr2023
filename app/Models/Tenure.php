<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tenure extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = ['end', 'school_id', 'start','user_id'];

    protected $with = ['school'];

    public function getCurrentSchoolAttribute(): bool
    {
        return (bool)$this->end;
    }

    public function getTenureAttribute(): int
    {
        $end = $this->end ?: date('Y');

        return ($end - $this->start);
    }

    public function school()
    {
        return $this->belongsTo(School::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
