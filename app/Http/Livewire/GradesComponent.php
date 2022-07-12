<?php

namespace App\Http\Livewire;

use Livewire\Component;

class GradesComponent extends Component
{
    public $grades = [];
    public $name = '';
    public $school;

    public function mount()
    {
        $this->grades = [1,2,3,4,5,6,7,8,9,10,11,12,'collegiate','adult'];
        $this->name = $this->school->name;
    }

    public function render()
    {
        return view('livewire.grades-component');
    }


}
