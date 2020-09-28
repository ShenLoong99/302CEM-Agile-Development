<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Gallery;

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

		return redirect('/e/eventdetails/1');
	}

}