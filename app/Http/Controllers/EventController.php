<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Event;
use App\Models\Gallery;
use App\Models\Booking_List;
use App\Models\User;
use Carbon\Carbon;

class EventController extends Controller
{
	///////////////////////////////////////////////////////////////////////////////////////////////
    // Sky's part
    public function home() {
		// check if event out of date, set event to not active
		$check = Event::where('active', 1)->get(); 
		foreach ($check as $check) {
			if ($check->date_time_start <= Carbon::now()) {
				$check->active = 0;
				$check->save();
			}
		} // retrieve event details
		$event = Event::where('active', 1)->limit(3)->get();
		$all_ev_id = array();
		$mem_ID = Auth::id();
		$reg = Booking_List::where('mem_ID', $mem_ID)->get();
        foreach ($reg as $key => $value) {
            // delete duplicate event id if user registered the same event for multiple times
            foreach ($all_ev_id as $ev_id) {
                if ($ev_id == $value["ev_ID"]) {
                    unset($reg[$key]);
                }
            }
            array_push($all_ev_id, $value["ev_ID"]);

            $events = Event::where('id', $value["ev_ID"])->	first();
            $value["ev_ID"] = $events["id"];
            $value["ev_name"] = $events["ev_name"];
            $value["updated_at"] = $events["updated_at"];

            // delete event record there is no changes after user register
            if($events["updated_at"] < $value["created_at"] || $events["active"] == 0) { unset($reg[$key]); }
        }

        // sort by latest updated date
        $reg = $reg->sortByDesc('updated_at');
        $highlight = Event::findOrFail(2);
        foreach ($event as $value) {
			$image = Gallery::where('ev_ID', $value->id)->where('main', 1)->first();
			$value['image'] = $image['image'];
        }
        return view('home', ['event' => $event, 'highlight' => $highlight, 'notifications' => $reg]);
    }

    public function insert() {
        return view('insert_event');
    }

    public function store(Request $request) {
		$data = request()->validate([
			'name' => 'required|max:255',
			'desc' => 'required|max:255',
			'cat' => 'required|numeric|min:1|max:5',
			'venue' => 'required|max:255',
			'start' => 'required|date|after:today',
			'end' => 'required|date|after:date_time_start',
			'price' => 'required|numeric|min:0|max:9999|regex:/^\d+(\.\d{1,2})?$/',
			'max' => 'required|numeric|min:40',
			'main_img' => 'required|max:1000|url',
			'img_1' => 'required|max:1000|url',
			'img_2' => 'required|max:1000|url',
			'img_3' => 'required|max:1000|url',
			'img_4' => 'required|max:1000|url',
			'img_5' => 'required|max:1000|url',
			'img_6' => 'required|max:1000|url',
		]);
		$event = new Event();
		$event->ev_name = $request->get('name');
        $event->date_time_start = $request->get('start');
        $event->date_time_end = $request->get('end');
        $event->ev_location = $request->get('venue');
        $event->description = $request->get('desc');
        $event->cat = $request->get('cat');
        $event->price = $request->get('price');
		$event->max_participants = $request->get('max');
		if (!empty($request->get('id'))) { $id = $request->get('id'); } 
		else { $id = Auth::id(); }
        $event->admin_id = $id;
        $event->active = 1;
        $event->save(); // save event details to event table
		$currID = $event->id;
        $main_img = $request->get('main_img');
		$img_1 = $request->get('img_1');
        $img_2 = $request->get('img_2');
        $img_3 = $request->get('img_3');
        $img_4 = $request->get('img_4');
        $img_5 = $request->get('img_5');
		$img_6 = $request->get('img_6');
		$gallery = new Gallery();
        $gallery = [
            ['ev_ID' => $currID, 'image' => $main_img, 'main' => 1], 
            ['ev_ID' => $currID, 'image' => $img_1, 'main' => 2], 
            ['ev_ID' => $currID, 'image' => $img_2, 'main' => 3], 
            ['ev_ID' => $currID, 'image' => $img_3, 'main' => 4], 
            ['ev_ID' => $currID, 'image' => $img_4, 'main' => 5], 
            ['ev_ID' => $currID, 'image' => $img_5, 'main' => 6], 
            ['ev_ID' => $currID, 'image' => $img_6, 'main' => 7]
        ];
        Gallery::insert($gallery); // Eloquent approach, save into gallery table
		return redirect('/insert_event')->with('msg', 'New event is added');
		// return true; // for testing purpose
	}

	public function book(Request $request, $event_id) {
		$data = request()->validate([
			// 'id' => 'required|numeric',
			'qty' => 'required|numeric|min:1|max:10'
		]);
		if (!empty($request->get('id'))) { $mem_id = $request->get('id'); } 
		else { $mem_id = Auth::id(); }
		$booking = Booking_List::where('ev_ID', $event_id)->where('mem_ID', $mem_id)->first();
		if (!empty($booking)) {
			$booking->quantity += $request->get('qty');
			$booking->save();
		} else {
			$book = new Booking_List();
			$book->mem_ID = $mem_id;
			$book->quantity = $request->get('qty');
			$book->ev_ID = $event_id;
			$book->save(); // save booking details to booking_list table
		}
		return redirect('/eventdetails/'.$event_id)->with('msg', 'Ticket(s) purchased!');
		// return true; // for testing use
	}

    ///////////////////////////////////////////////////////////////////////////////////////////////
    // Wayne's part
    public function edit($event_id) {
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

		return view('edit', ['event' => $event, 'gallery' => $gallery_filtered]);
	}

	public function update(Request $request, $id){
		$data = request()->validate([
			'event_name' => 'required|max:255',
			'description' => 'required|max:255',
			'category' => 'required',
			'event_location' => 'required|max:255',
			'date_time_start' => 'required|date',
			'date_time_end' => 'required|date|after:date_time_start',
			'price' => 'required|numeric|min:0|max:9999|regex:/^\d+(\.\d{1,2})?$/',
			'max_participants' => 'required|numeric|min:40|max:3000',
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

		return redirect('/edit/'.$id)->with('message','Updated successfully');
		// return true; // for testing 
    }
    
    ///////////////////////////////////////////////////////////////////////////////////////////////
    // Shaun's part
    public function show($event_id) {
		// $events = Event::all()->toArray();
		$event = Event::findOrFail($event_id);
		$booking = Booking_List::where('ev_ID', $event_id)->get();
		$remain = 0;
		foreach ($booking as $val) {
			$remain += $val["quantity"];
		}
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
		return view('eventdetails', ['event' => $event, 'gallery' => $gallery_filtered, 'available' => $remain]);
    }
    
    public function destroy($event_id){
		$event = Event::findOrFail($event_id);
		$event->delete();
		$reg = Booking_List::where('ev_ID', $event_id);
		$reg->delete();

		return redirect('/adminevent');
		//return true; // for testing 
	}

	public function attendees($event_id){
        $reg = Booking_List::where('ev_ID', $event_id)->get();
        $event = Event::where('id', $event_id)->first();
        $data["sum"] = Booking_List::where('ev_ID', $event_id)->get()->sum("quantity");
        if (!$event) {
        	return view('home');
        }
        else {
    	 	foreach ($reg as $value) {
        		$user = User::where('id', $value["mem_ID"])->first();
				$value["register_name"] = $user["name"];
			}
        }
		return view('attendees', $data, ['reg' => $reg, 'event' => $event]);
	}

	///////////////////////////////////////////////////////////////////////////////////////////////
	// Khai Shian's part
	public function event() {
        $events = Event::where('admin_id', Auth::id())->orderBy('active', 'DESC')->get();
        return view('adminevent', compact('events'));
    }

    public function view_event() {
        $events = Event::where('active', 1)->get();
        foreach ($events as $value) {
			$image = Gallery::where('ev_ID', $value["id"])->where('main', 1)->first();
			$value["image"] = $image["image"];
        }
		return view('event', ['event' => $events]);
		// return true; // for testing purpose
	}
	
	public function registered_event(Request $request) {
		$data = request()->validate([
			//'id' => 'required|numeric'
		]);
		if (!empty($request->get('id'))) { $id = $request->get('id'); }
		else { $id = Auth::id(); }
		$count = 0;
		$reg = Booking_List::where('mem_ID', $id)->orderBy('updated_at', 'DESC')->get();
		foreach ($reg as $value) {
			$event = Event::where('id', $value["ev_ID"])->first();
			$value["id"] = $event['id'];
			$value["ev_name"] = $event["ev_name"];
			$value["description"] = $event["description"];
			$value["date_time_start"] = $event["date_time_start"];
			$value["date_time_end"] = $event["date_time_end"];
			$image = Gallery::where('ev_ID', $value["ev_ID"])->where('main', 1)->first();
			$value["image"] = $image["image"];
			$count++;
		}
		return view('registeredevent', [ 'events' => $reg, 'count' => $count ]);
		//return true; // for testing
    }
}
