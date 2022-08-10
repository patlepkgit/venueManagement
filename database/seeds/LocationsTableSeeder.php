<?php

use Illuminate\Database\Seeder;
use App\Location;
use Illuminate\Support\Str;

class LocationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $locations=[
            'London',
            'Manchester',
            'Liverpool',
            'Birminghan'
         ];

        foreach ($locations as $location){
            $slug=Str::slug($location);
            $locationObject=Location::create([
                'name'=>$location,
                'slug'=>$slug
            ]);

            $locationObject->addMediaFromUrl(public_path('images/locations/'.$slug.'.jpg'))->toMediaCollection('photo');
        }
    }
}
