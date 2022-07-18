<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(DomainOwnerSeeder::class);
        $this->call(ArrangementTypesSeeder::class);
        $this->call(CountySeeder::class);
        $this->call(GeostateSeeder::class);
        $this->call(SchoolSeeder::class);
        $this->call(GradeSeeder::class);
        $this->call(CopyTypeSeeder::class);
        $this->call(ArtistTypeSeeder::class);
    }
}
