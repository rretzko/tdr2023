<?php

namespace App\Exports;

use App\Models\School;
use App\Models\Tenure;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class SchoolsExport implements FromCollection, WithHeadings, WithMapping
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Tenure::all();
    }

    public function headings(): array
    {
        return [
            'School','Start','End','Tenure','Grades',
        ];
    }

    public function map($tenure): array
    {
        return [
            $tenure['school']->name,
            $tenure->start,
            $tenure->end,
            $tenure->tenure,
            $tenure->gradesTaughtString,
        ];
    }
}
