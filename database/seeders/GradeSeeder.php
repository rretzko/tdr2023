<?php

namespace Database\Seeders;

use App\Models\Grade;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GradeSeeder extends Seeder
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
        foreach($this->seeds AS $seed)
        {
            Grade::create(['descr' => $seed]);
        }
    }

    private function buildSeeds()
    {
        $this->seeds = [
            1,2,3,4,5,6,7,8,9,10,11,12,'collegiate','adult'
        ];
    }
}
