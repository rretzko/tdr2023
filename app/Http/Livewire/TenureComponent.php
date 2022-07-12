<?php

namespace App\Http\Livewire;

use Livewire\Component;

class TenureComponent extends Component
{
    public $end = '';
    public $name = '';
    public $tenure;
    public $tenureyears;
    public $start = '';
    public $updatedmssg = '';

    public function mount()
    {
        $this->end = $this->tenure->end;
        $this->name = $this->tenure['school']->name;
        $this->start = $this->tenure->start;
        $this->tenureyears = $this->tenure->tenure;
    }

    public function render()
    {
        return view('livewire.tenure-component');
    }

    public function register()
    {
        $this->tenure->update(
            [
                'start' => $this->start,
                'end' => $this->end,
            ]
        );

        $this->tenureyears = $this->tenure->tenure;

        $this->updatedmssg = ($this->tenure->wasChanged())
            ? 'Tenure for '.$this->name.' has been updated.'
            : 'No changes made to '.$this->name.'.';
    }
}
