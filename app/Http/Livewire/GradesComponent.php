<?php

namespace App\Http\Livewire;

use App\Models\Grade;
use App\Models\GradesTaught;
use App\Services\SyncCheckedGradeIdsService;
use Livewire\Component;

class GradesComponent extends Component
{
    public $checkeds = [];
    public $grades = [];
    public $name = '';
    public $school;
    public $updatedmssg = '';

    public function mount()
    {
        $this->grades = Grade::all();
        $this->name = ($this->school) ? $this->school->name : 'New School';
        $this->checkeds = auth()->user()->schoolGradeIdsTaught($this->school);
    }

    public function render()
    {
        return view('livewire.grades-component');
    }

    public function updatedCheckeds()
    {
        $updated = new SyncCheckedGradeIdsService($this->checkeds, $this->school);

        $this->updatedmssg = 'Grades updated. ('.implode(',', $this->checkeds).')';
    }

}
