<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

class Tenure extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = ['end', 'school_id', 'start','user_id'];

    protected $with = ['school'];

    public function getCurrentSchoolAttribute(): bool
    {
        return (bool)$this->end;
    }

    public function getGradesTaughtStringAttribute(): string
    {
        $grades = DB::table('grades_taughts')
            ->join('grades','grades_taughts.grade_id','=','grades.id')
            ->where('grades_taughts.user_id','=',$this->user_id)
            ->where('grades_taughts.school_id', '=',$this->school->id)
            ->whereNull('grades_taughts.deleted_at')
            ->select('grades.descr')
            ->orderBy('grades.id')
            ->pluck('grades.descr')
            ->toArray();

        return implode(',', $grades);
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
