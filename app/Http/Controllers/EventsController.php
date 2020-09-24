<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventsController extends Controller
{
	// public function index(){
		

	// }

	public function edit($event_id){
		// $events = Event::all()->toArray();
		$event = Event::findOrFail($event_id);
		return view('events.edit', compact('event'));
	}

	// public function index($user)
 //    {
 //    	$user = User::findOrFail($user);

 //        return view('profiles.index', [
 //        	'user' => $user, 
 //        ]);
 //    }

	public function update(Request $request, $id){
		$data = request()->validate([
			'event_name' => 'required|min:1|max:50',
			'date_time_start' => 'required|date',
			'date_time_end' => 'required|date|after:date_time_start',
			'event_location' => 'required|max:50',
			'description' => 'required|min:1|max:255',
			'category' => 'required',
			'price' => 'required|min:0|max:9999',
			'max_participants' => 'required|min:1|max:4000',
			'active' => 'required',
		]);

		$event = Event::find($id);

		$event->ev_name = $request->get('event_name');
		$event->date_time_start = $request->get('date_time_start');
		$event->date_time_end = $request->get('date_time_end');
		$event->ev_location = $request->get('event_location');
		$event->description = $request->get('description');
		$event->cat_ID = $request->get('category');
		$event->price = $request->get('price');
		$event->max_participants = $request->get('max_participants');
		$event->active = $request->get('active');

		$event->save();

		return redirect('/e/edit/1')->with('message','Updated successfully');

		// $imagePath = request('image')->store('uploads', 'public');

		// $image = Image::make(public_path("storage/{$imagePath}"))->fit(1200, 1200);
		// $image->save();
		
		// auth()->user()->posts()->create([
		// 	'caption' => $data['caption'],
		// 	'image' => $imagePath, 
		// ]);

		// return redirect('/profile/' . auth()->user()->id);
	}
}
