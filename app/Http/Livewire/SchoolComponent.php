<?php

namespace App\Http\Livewire;

use App\Models\County;
use App\Models\Geostate;
use Livewire\Component;

class SchoolComponent extends Component
{
    public $address1 = '';
    public $address2 = '';
    public $city = '';
    public $countyid = '';
    public $geostateid = 5;
    public $geostates = null;
    public $name = '';
    public $postalcode = '';
    public $school = null;
    public $updatedmssg = '';


    public function mount()
    {
        $this->address1 = $this->school->address1;
        $this->address2 = $this->school->address2;
        $this->city = $this->school->city;
        $this->countyid = $this->school->county_id;
        $this->geostateid = $this->school->geostate_id;
        $this->name = $this->school->name;
        $this->postalcode = $this->school->postal_code;

        $this->counties = County::orderBy('name')->get();
        $this->geostates = Geostate::orderBy('name')->get();
    }

    public function render()
    {
        return view('livewire.school-component');
    }

    public function register()
    {
        $this->school->update(
            [
                'name' => $this->name,
                'address1' => $this->address1,
                'address2' => $this->address2,
                'city' => $this->city,
                'county_id' => $this->countyid,
                'geostate_id' => $this->geostateid,
                'postal_code' => $this->postalcode,
            ],
        );

        $this->updatedmssg = ($this->school->wasChanged())
            ? $this->name . ' has been updated.'
            : 'No changes made to '.$this->name;
    }

    public function updating()
    {
        $this->reset('updatedmssg');
    }
}
