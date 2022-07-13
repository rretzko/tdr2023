<?php

namespace App\Services;


use App\Models\GradesTaught;
use App\Models\School;
use App\Models\User;

class SyncCheckedGradeIdsService
{
    private $gradestaught; //gradeids
    private $gradeids;
    private $school;
    private $user;

    public function __construct(array $gradeids, School $school, User $user=null)
    {
        $this->gradeids = $gradeids;
        $this->school = $school;
        $this->user = ($user) ?: auth()->user();

        $this->gradestaught = GradesTaught::withTrashed()
            ->where('user_id', $this->user->id)
            ->where('school_id', $this->school->id)
            ->get();

        self::init();
    }

    private function addCheckedGradeIds():void
    {
        foreach($this->gradeids AS $gradeid){

            GradesTaught::firstOrCreate(
                [
                    'user_id' => $this->user->id,
                    'school_id' => $this->school->id,
                    'grade_id' => $gradeid
                ]
            );
        }
    }

    private function init():void
    {
        self::restoreTrashedGradeIds();

        self::deleteUncheckedGradeIds();

        self::addCheckedGradeIds();
    }

    private function deleteUncheckedGradeIds():void
    {
        foreach($this->gradestaught AS $gradetaught){

            if(! in_array($gradetaught->grade_id, $this->gradeids)){

                $gradetaught->delete();
            }
        }
    }

    private function restoreTrashedGradeIds():void
    {
        foreach($this->gradestaught AS $gradetaught){

            if($gradetaught->trashed() && in_array($gradetaught->grade_id, $this->gradeids)){

                $gradetaught->restore();
            }
        }
    }
}
