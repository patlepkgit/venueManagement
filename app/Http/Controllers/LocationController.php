<?php

namespace App\Http\Controllers;

use App\Venue;
use App\EventType;
use App\Location;

class LocationController extends Controller
{
    public function index($slug)
    {
       $location=Location::where('slug',$slug)->firstOrfail();

        $venues=Venue::with('event_types')
        ->where('location_id',$location->id)
        ->latest()
        ->paginate(3);

        return view('location',compact('venues','location'));
    }
}
