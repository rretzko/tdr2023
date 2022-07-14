<?php

namespace App\Http\Livewire;

use App\Models\County;
use App\Models\Geostate;
use App\Models\School;
use App\Models\Tenure;
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
    public $searchresults = '';
    public $updatedmssg = '';

    public function mount()
    {
        if($this->school) {

            $this->address1 = $this->school->address1;
            $this->address2 = $this->school->address2;
            $this->city = $this->school->city;
            $this->countyid = $this->school->county_id;
            $this->geostateid = $this->school->geostate_id;
            $this->name = $this->school->name;
            $this->postalcode = $this->school->postal_code;
        }

        $this->counties = County::orderBy('name')->get();
        $this->geostates = Geostate::orderBy('name')->get();
    }

    public function render()
    {
        return view('livewire.school-component');
    }

    public function register()
    {
        if(! $this->school){

            $this->registerStore();

        }else {

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
    }

    /**
     * Store a new school
     */

    /**
     * Save the school for auth()->user() and redirect to edit page
     * @param $school_id
     * @return void
     */
    public function quickSave($school_id)
    {
        //check if $school_id has been deleted
        (Tenure::onlyTrashed()
                    ->where('school_id', $school_id)
                    ->where('user_id', auth()->id())
                    ->first())

            ? Tenure::withTrashed()
                ->where('school_id', $school_id)
                ->where('user_id', auth()->id())
                ->restore()

            : Tenure::create(
                [
                    'school_id' => $school_id,
                    'user_id' => auth()->id(),
                    'start' => date('Y'),
                ]
                );

        $tenure = Tenure::where('school_id', $school_id)
            ->where('user_id', auth()->id())
            ->first();

        redirect()->to('/schools/edit/'.$tenure->id);
    }

    /**
     * Used when adding a new school to search for an existing value
     * @return string|void
     */
    public function updatedName()
    {
        //early exits
        if($this->school){ $this->reset('searchresults'); return ''; }
        if(! strlen($this->name)){ $this->reset('searchresults'); return ''; }


        $schools = School::where('name', 'LIKE', '%'.$this->name.'%')
            ->select('id','name','city','postal_code')
            ->get();

        $this->searchresults = '<ul>';
        foreach($schools AS $school){

            $this->searchresults .= '<li>'.$school->shortName.' ('.$school->city.' '.$school->postal_code.')</li>';
        }

        $this->searchresults .= '</ul>';
    }

    /**
     * Used when adding a new school to search for an existing value
     * @return string|void
     */
    public function updatedPostalcode()
    {
        //early exits
        if($this->school){ $this->reset('searchresults'); return ''; }
        if(! strlen($this->postalcode)){ $this->reset('searchresults'); return ''; }


        $schools = School::where('postal_code', 'LIKE', '%'.$this->postalcode.'%')
            ->select('id','name','city','postal_code')
            ->orderBy('name')
            ->get();

        $this->searchresults = '<ul>';
        foreach($schools AS $school){

            $this->searchresults .= '<li>'.$this->schoolLink($school).'</li>';
        }

        $this->searchresults .= '</ul>';
    }

    public function updating()
    {
        $this->reset('updatedmssg');
    }

    private function registerStore()
    {
        $school = School::create(
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

        $tenure = Tenure::create(
            [
                'school_id' => $school->id,
                'user_id' => auth()->id(),
                'start' => date('Y')
            ]
        );

        $this->updatedmssg = $this->name . ' has been added.';

        return redirect()->to('schools/edit/'.$tenure->id);
    }

    private function schoolLink(School $school): string
    {
        $str = '';

        $str = '<span wire:click="quickSave('.$school->id.')" class="cursor-pointer">'
            . $school->shortName.' ('.$school->city.' '.$school->postal_code.')'
            . '</span>';

        return $str;
    }
}
