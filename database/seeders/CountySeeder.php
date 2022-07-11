<?php

namespace Database\Seeders;

use App\Models\County;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CountySeeder extends Seeder
{
    private $seeds;

    public function __construct()
    {
        self::buildSeeds();
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach($this->seeds AS $seeds){

            County::create([
               'id' => $seeds[0],
               'name' => $seeds[1],
            ]);
        }
    }

    public function buildSeeds()
    {
        $this->seeds = [
            [1,'Atlantic'],
            [2,'Bergen'],
            [3,'Burlington'],
            [4,'Camden'],
            [5,'Cape May'],
            [6,'Cumberland'],
            [7,'Essex'],
            [8,'Gloucester'],
            [9,'Hudson'],
            [10,'Hunterdon'],
            [11,'Mercer'],
            [12,'Middlesex'],
            [13,'Morris'],
            [14,'Ocean'],
            [15,'Passaic'],
            [16,'Salem'],
            [17,'Somerset'],
            [18,'Sussex'],
            [19,'Union'],
            [20,'Warren'],
            [21,'Monmouth'],
            [22,'Unknown'],
        ];
    }
}
