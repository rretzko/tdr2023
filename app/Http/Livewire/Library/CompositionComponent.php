<?php

namespace App\Http\Livewire\Library;

use App\Models\Library\ArrangementType;
use App\Models\Library\Composition;
use App\Models\Library\Copytype;
use App\Models\Library\Library;
use App\Services\Library\OpenLibrariesService;
use Livewire\Component;

class CompositionComponent extends Component
{
    public $arrangementtypeid=1;
    public $arrangementtypes=null;
    public $copytypeid=1;
    public $copytypes=null;
    public $library=null;
    public $libraryid=0;
    public $libraries=null;
    public $newarrangementtype='';
    public $newarrangementtypetoggle=false;
    public $searchtitles='';
    public $subtitle='';
    public $title='';

    public function mount()
    {
        $this->arrangementtypes = Arrangementtype::orderBy('descr')->get();
        $this->copytypes = Copytype::all();
        $service = new OpenLibrariesService();
        $this->libraries = $service->libraries();
        $this->libraryid = $this->library->id;
    }

    public function render()
    {
        return view('livewire..library.composition-component');
    }

    public function register()
    {
        $this->validate();

        $composition = Composition::create(
            [
                'title' => $this->title,
                'subtitle' => $this->subtitle,
                'arrangement_type_id' => $this->arrangementtypeid,
            ]
        );

        $this->library->compositions()->attach($composition);
    }

    public function updatedLibraryid()
    {
        $this->library = Library::find($this->libraryid);
    }

    public function updatedTitle()
    {
        //reset
        $this->reset('searchtitles');

        if(strlen($this->title)) {

            foreach(Composition::where('title', 'LIKE', '%'.$this->title.'%')->orderBy('title')->get() AS $composition){

                $this->searchtitles .= '<a href="/library/composition/edit/'.$composition->id.'" class="text-blue-600">'
                    .$composition->title
                    .'</a>';
            }

        }else{
            $this->reset('searchtitles');
        }
    }

    protected function rules()
    {
        return [
            'title' => ['string','required'],
            'subtitle' => ['string','nullable'],
            'arrangementtypeid' => ['numeric','required','exists:arrangement_types,id'],
        ];
    }
}
