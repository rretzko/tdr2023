<?php

namespace Database\Seeders;

use App\Models\Geostate;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GeostateSeeder extends Seeder
{
    private $seeds;

    public function __construct()
    {
        $this->seeds = [];

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

            Geostate::create(
                [
                    'country_abbr' => $seeds[0],
                    'name' => $seeds[1],
                    'abbr' => $seeds[2],
                ]
            );
        }
    }

    private function buildSeeds()
    {
        $this->seeds = [
            ['US','Alaska','AK'],
            ['US','Alabama','AL'],
            ['US','Arkansas','AR'],
            ['US','American Samoa','AS'],
            ['US','Arizona','AZ'],
            ['US','California','CA'],
            ['US','Colorado','CO'],
            ['US','Connecticut','CT'],
            ['US','District of Columbia','DC'],
            ['US','Delaware','DE'],
            ['US','Florida','FL'],
            ['US','Federated States of Micronesia','FM'],
            ['US','Georgia','GA'],
            ['US','Guam','GU'],
            ['US','Hawaii','HI'],
            ['US','Iowa','IA'],
            ['US','Idaho','ID'],
            ['US','Illinois','IL'],
            ['US','Indiana','IN'],
            ['US','Kansas','KS'],
            ['US','Kentucky','KY'],
            ['US','Louisiana','LA'],
            ['US','Massachusetts','MA'],
            ['US','Maryland','MD'],
            ['US','Maine','ME'],
            ['US','Marshall Islands','MH'],
            ['US','Michigan','MI'],
            ['US','Minnesota','MN'],
            ['US','Missouri','MO'],
            ['US','Northern Mariana Islands','MP'],
            ['US','Mississippi','MS'],
            ['US','Montana','MT'],
            ['US','North Carolina','NC'],
            ['US','North Dakota','ND'],
            ['US','Nebraska','NE'],
            ['US','New Hampshire','NH'],
            ['US','New Jersey','NJ'],
            ['US','New Mexico','NM'],
            ['US','Nevada','NV'],
            ['US','New York','NY'],
            ['US','Ohio','OH'],
            ['US','Oklahoma','OK'],
            ['US','Oregon','OR'],
            ['US','Pennsylvania','PA'],
            ['US','Puerto Rico','PR'],
            ['US','Palau','PW'],
            ['US','Rhode Island','RI'],
            ['US','South Carolina','SC'],
            ['US','South Dakota','SD'],
            ['US','Tennessee','TN'],
            ['US','Texas','TX'],
            ['US','Utah','UT'],
            ['US','Virginia','VA'],
            ['US','Virgin Islands','VI'],
            ['US','Vermont','VT'],
            ['US','Washington','WA'],
            ['US','Wisconsin','WI'],
            ['US','West Virginia','WV'],
            ['US','Wyoming','WY'],
        ];
    }
}
