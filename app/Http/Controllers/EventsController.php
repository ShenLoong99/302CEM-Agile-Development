<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Gallery;

class EventsController extends Controller
{
	public function edit($event_id){
		$event = Event::findOrFail($event_id);
		$event["price"] = number_format((float)$event["price"], 2, '.', '');

		$gallery = Gallery::where('ev_ID', $event_id)->get();
		$gallery_filtered = array();

		$counter = 1;
		foreach ($gallery as $value) {
			if ($value['main'] == 1){
				$gallery_filtered[0] = $value['image'];
			} 
			else {
				$gallery_filtered[$counter] = $value['image'];
				$counter++;
			}
		}
		return view('events.edit', ['event' => $event, 'gallery' => $gallery_filtered]);
	}

	public function update(Request $request, $id){
		$data = request()->validate([
			'event_name' => 'required|max:255',
			'description' => 'required|max:255',
			'category' => 'required|numeric|min:1|max:4',
			'event_location' => 'required|max:255',
			'date_time_start' => 'required|date|after:today',
			'date_time_end' => 'required|date|after:date_time_start',
			'price' => 'required|numeric|min:0|regex:/^\d+(\.\d{1,2})?$/',
			'max_participants' => 'required|numeric|min:40|max:3000',
			'active' => 'required|numeric|min:1|max:3',
			'main_img' => 'required|max:1000|url',
			'img_1' => 'required|max:1000|url',
			'img_2' => 'required|max:1000|url',
			'img_3' => 'required|max:1000|url',
			'img_4' => 'required|max:1000|url',
			'img_5' => 'required|max:1000|url',
			'img_6' => 'required|max:1000|url',
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

		// return redirect('/e/edit/1')->with('message','Updated successfully');
		return true;
	}
}
