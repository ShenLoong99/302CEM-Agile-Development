<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Gallery;
use App\Models\Booking_List;
use App\Models\Attendee;




class EventListController extends Controller
{
    public function event()
    {
        $events = Event::all()->toArray();
        return view('adminevent', compact('events'));
    }

    // public function view_event()
    // {
    //     $events = Event::all();
    //     foreach ($events as $value) {
    //         $image = Gallery::where('ev_ID', $value["id"])->where('main', 1)->first();
    //         // $value["image"] = $image["image"];
    //     }
    //     $events =  $events->toArray();
    //     return view('event', compact('events'));
    //     // return view('event', ['event' => $events]);

    // }

    public function view_event() {
        $events = Event::where('active', 1)->get();
        foreach ($events as $value) {
            $image = Gallery::where('ev_ID', $value["id"])->where('main', 1)->first();
			$value["image"] = $image["image"];
        }
        return view('event', ['event' => $events]);
	}


    public function registered_event() {
        $reg = Booking_List::where('mem_ID', 1)->get();

        foreach ($reg as $value) {
            $events = Event::where('id', $value["ev_ID"])->first();
            $value["ev_name"] = $events["ev_name"];
            $value["description"] = $events["description"];
            $value["date_time_start"] = $events["date_time_start"];
            $value["date_time_end"] = $events["date_time_end"];
            $image = Gallery::where('ev_ID', $value["ev_ID"])->where('main', 1)->first();
            $value["image"] = $image["image"];
            // $events["quantity"] = $value["quantity"];
        }
        return view('registeredevent', ['events' => $reg]); 
        
    }

    public function attendees($event_id){

		$mem_ID = Auth::id();
        $reg = Booking_List::where('ev_ID', $event_id)->get();
        $event = Event::where('id', $event_id)->first();
        $data["sum"] = Booking_List::get()->sum("quantity");
        if (!$event)
        {
        	return view('home');
        }
        else
        {
    	 	foreach ($reg as $value) 
	 		{
        		$user = User::where('id', $value["mem_ID"])->first();
				$value["register_name"] = $user["name"];
			}
        }

		return view('attendees', $data, ['reg' => $reg, 'event' => $event]);
	}

    
}
