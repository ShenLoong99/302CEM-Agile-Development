<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Event;
use App\Models\Gallery;
use App\Models\Booking_List;
use App\Models\User;


class EventController extends Controller
{
	// public function index(){


	// }

	public function show($event_id){
		// $events = Event::all()->toArray();
		$event = Event::findOrFail($event_id);

		// $gallery_first = Gallery::where('ev_ID', $event_id)->first();
		// $event["image"] = $gallery_first["image"];

		$gallery = Gallery::where('ev_ID', $event_id)->get();
		$gallery_filtered = array();
		$counter = 1;
		foreach ($gallery as $value) {
			if ($value['main'] == 1){
				// $gallery_filtered["main"] == $value['image'];
				$gallery_filtered[0] = $value['image'];
			} 
			else {
				$gallery_filtered[$counter] = $value['image'];
				$counter++;
				// $gallery_filtered["sub"] == $value['image'];
			}
		}
		return view('eventdetails', ['event' => $event, 'gallery' => $gallery_filtered]);
	}

	// public function index($user)
 	//    {
 	//    	$user = User::findOrFail($user);

 	//        return view('profiles.index', [
 	//        	'user' => $user, 
 	//        ]);
 	//    }

	public function destroy($event_id){
		$event = Event::findOrFail($event_id);
		$event -> delete();

		//return redirect('/e/eventdetails/1');
		return true;
	}

	public function attendees($event_id){

		$mem_ID = Auth::id();
        $reg = Booking_List::where('ev_ID', $event_id)->get();
        $event = Event::where('id', $event_id)->first();

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

		return view('attendees', ['reg' => $reg, 'event' => $event]);
	}

}