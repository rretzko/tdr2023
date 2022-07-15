<?php

namespace App\Services\Library;

use App\Models\Library\Library;
use App\Models\Tenure;
use Illuminate\Support\Collection;

class OpenLibrariesService
{
    private $libraries;
    private $schools;

    public function __construct()
    {
        $this->schools = Tenure::where('user_id', auth()->id())
            ->whereNull('end')
            ->select('school_id')
            ->get()
            ->toArray();

        self::libraryFactory();
    }

    public function libraries(): Collection
    {
        return Library::where('user_id', auth()->id())->get();
    }

    private function libraryFactory(): void
    {
        foreach($this->schools AS $schools){

            Library::firstOrCreate(
                [
                    'user_id' => auth()->id(),
                    'school_id' => $schools['school_id'],
                ],
                [
                    'name' => $schools['school']['name'].' Library',
                ]
            );
        }
    }
}
