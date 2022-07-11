<?php

namespace Database\Seeders;

use App\Models\Library\ArrangementType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArrangementTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $seeds = ['satb','ssa','ssaa','ttbb','mixed','none','other'];

        foreach($seeds AS $seed){

            ArrangementType::create(['descr' => $seed]);
        }
    }
}
