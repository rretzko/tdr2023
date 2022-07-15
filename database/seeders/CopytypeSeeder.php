<?php

namespace Database\Seeders;

use App\Models\Library\Copytype;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CopytypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $seeds = [
            ['single copy','Ex. Copy of music received at a reading session'],
            ['director copy','Ex. Copy of music with director analysis markings'],
            ['choral library', 'Ex. Copies of music for ensemble usage']
            ];

        foreach($seeds AS $seed){

            Copytype::create(
                [
                    'descr' => $seed[0],
                    'help' => $seed[1],
                ]
            );
        }
    }
}
