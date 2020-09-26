<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Gallery;

class EventsController extends Controller
{
	// public function index(){


	// }

	public function edit($event_id){
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
		return view('events.edit', ['event' => $event, 'gallery' => $gallery_filtered]);
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
			'main_img' => 'required',
			'img_1' => 'required',
			'img_2' => 'required',
			'img_3' => 'required',
			'img_4' => 'required',
			'img_5' => 'required',
			'img_6' => 'required',
		]);

		$event = Event::find($id);	

		$event->ev_name = $request->get('event_name');
		$event->date_time_start = $request->get('date_time_start');
		$event->date_time_end = $request->get('date_time_end');
		$event->ev_location = $request->get('event_location');
		$event->description = $request->get('description');
		$event->cat = $request->get('category');
		$event->price = $request->get('price');
		$event->max_participants = $request->get('max_participants');
		$event->active = $request->get('active');

		$event->save();

		$gallery = Gallery::where(['ev_ID' => $id, 'main' => 1])->first();	
		$gallery->image = $request->get('main_img');
		$gallery->save();

		$gallery = Gallery::where(['ev_ID' => $id, 'main' => 2])->first();	
		$gallery->image = $request->get('img_1');
		$gallery->save();

		$gallery = Gallery::where(['ev_ID' => $id, 'main' => 3])->first();	
		$gallery->image = $request->get('img_2');
		$gallery->save();

		$gallery = Gallery::where(['ev_ID' => $id, 'main' => 4])->first();	
		$gallery->image = $request->get('img_3');
		$gallery->save();

		$gallery = Gallery::where(['ev_ID' => $id, 'main' => 5])->first();	
		$gallery->image = $request->get('img_4');
		$gallery->save();

		$gallery = Gallery::where(['ev_ID' => $id, 'main' => 6])->first();	
		$gallery->image = $request->get('img_5');
		$gallery->save();

		$gallery = Gallery::where(['ev_ID' => $id, 'main' => 7])->first();	
		$gallery->image = $request->get('img_6');
		$gallery->save();

		// $gallery = new Gallery();

		// $main_img = request('main_img');
		// $img_1 = request('img_1');
		// $img_2 = request('img_2');
		// $img_3 = request('img_3');
		// $img_4 = request('img_4');
		// $img_5 = request('img_5');
		// $img_6 = request('img_6');

		// $gallery = [
		// 	['ev_ID' => $id, 'image' => $main_img, 'main' => 1], 
		// 	['ev_ID' => $id, 'image' => $img_1, 'main' => 0], 
		// 	['ev_ID' => $id, 'image' => $img_2, 'main' => 0], 
		// 	['ev_ID' => $id, 'image' => $img_3, 'main' => 0], 
		// 	['ev_ID' => $id, 'image' => $img_4, 'main' => 0], 
		// 	['ev_ID' => $id, 'image' => $img_5, 'main' => 0], 
		// 	['ev_ID' => $id, 'image' => $img_6, 'main' => 0]
		// ];

		// // Gallery::update($gallery); 
		// Gallery::whereId($id)->update($gallery);


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
