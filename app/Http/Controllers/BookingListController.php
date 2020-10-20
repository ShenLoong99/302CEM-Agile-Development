<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Gallery;
use App\Models\Booking_List;

class BookingListController extends Controller
{
    public function registered_event() {
        $reg = Booking_List::all();

        $events;
        // foreach ($reg as $value) {
        //     $events = Event::where('id', $value["ev_ID"]);
        //     $image = Gallery::where('ev_ID', $value["ev_ID"])->where('main', 1)->first();
        //     $value["image"] = $image["image"];
        // }
         error_log(var_dump($events));
  
        $events =  $events->toArray();
        return view('registeredevent', compact('events')); 
        
    }
}
