<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\EventType;
use App\Location;
use App\Venue;


class HomeController extends Controller
{
    public function index(){
        // $featuredVenues=[
        //    [ 'hero_image'=>'images/hero_bg_1.jpg',
        //     'name'=>'853 S Lucerne Blvd',
        //     'address'=>'Los Angeles, CA 90005',
        //     'price'=>'$2,250,500',
        //     'link'=>'#',
        //    ],
        //    [ 'hero_image'=>'images/hero_bg_3.jpg',
        //    'name'=>'625 S. Berendo St',
        //    'address'=>'607 Los Angeles, CA 90005',
        //    'price'=>'$2,250,500',
        //    'link'=>'#',
        //    ]
        // ];

        $featuredVenues = Venue::where('is_featured',1)->get();

        $eventTypes = EventType::all();
        $locations = Location::all();

        $newestVenues=Venue::with('event_types')->latest()->take(3)->get();
        return view('home',compact('featuredVenues','eventTypes','locations','newestVenues'));
    }
}
