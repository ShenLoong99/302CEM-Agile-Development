<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Gallery;
use App\Models\Booking_List;


class EventListController extends Controller
{
    //
    public function event()
    {
        $events = Event::all()->toArray();
        return view('adminevent', compact('events'));
    }

    public function view_event()
    {
        $events = Event::all();
        foreach ($events as $value) {
            $image = Gallery::where('ev_ID', $value["id"])->where('main', 1)->first();
            $value["image"] = $image["image"];
        }
        $events =  $events->toArray();
        return view('event', compact('events'));
    }

    public function registered_event() {
        $events = Booking_List::all();

        // $events;
        // foreach ($reg as $value) {
        //     $events = Event::where('id', $value["ev_ID"]);
        //     $image = Gallery::where('ev_ID', $value["ev_ID"])->where('main', 1)->first();
        //     $value["image"] = $image["image"];
        // }
        // error_log(var_dump($events));
  
        // $events =  $events->toArray();
        return view('registeredevent', compact('events')); 
        
    }
}
