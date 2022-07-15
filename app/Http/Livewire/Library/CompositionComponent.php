<?php

namespace App\Http\Livewire\Library;

use App\Models\Library\ArrangementType;
use App\Models\Library\Copytype;
use App\Services\Library\OpenLibrariesService;
use Livewire\Component;

class CompositionComponent extends Component
{
    public $arrangementtypeid=0;
    public $arrangementtypes=null;
    public $copytypeid=1;
    public $copytypes=null;
    public $libraryid=0;
    public $libraries=null;
    public $newarrangementtype='';
    public $newarrangementtypetoggle=false;
    public $subtitle='';
    public $title='';

    public function mount()
    {
        $this->arrangementtypes = Arrangementtype::orderBy('descr')->get();
        $this->copytypes = Copytype::all();
        $service = new OpenLibrariesService();
        $this->libraries = $service->libraries();
    }

    public function render()
    {
        return view('livewire..library.composition-component');
    }

    public function register()
    {
        dd($this);
    }

    public function updatedLibraryid()
    {
        dd($this->libraryid);
    }
}
