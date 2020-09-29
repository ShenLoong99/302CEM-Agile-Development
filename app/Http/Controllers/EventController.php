<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Gallery;

class EventController extends Controller
{
    public function home() {
        // $event = Event::all();
        $event = Event::where('cat', 2)->where('active', 1)->limit(3)->get();
        $highlight = Event::findOrFail(2);
        foreach ($event as $value) {
            $image = Gallery::where('ev_ID', $value->id)->where('main', 1)->limit(3)->first();
            $value['image'] = $image['image'];
        }
        return view('home', ['event' => $event, 'highlight' => $highlight, 'image' => $image]);
    }

    public function insert() {
        return view('insert_event');
    }

    public function store() {
        $event = new Event();
        $event_name = request('name');
        $event->ev_name = request('name');
        $event->date_time_start = request('start');
        $event->date_time_end = request('end');
        $event->ev_location = request('venue');
        $event->description = request('desc');
        $event->cat = request('cat');
        $event->price = request('price');
        $event->max_participants = request('max');
        $event->admin_id = 1;
        $event->active = 1;
        $event->save();
        $currID = $event->id;
        $gallery = new Gallery();
        $main_img = request('main_img');
        $img_1 = request('img_1');
        $img_2 = request('img_2');
        $img_3 = request('img_3');
        $img_4 = request('img_4');
        $img_5 = request('img_5');
        $img_6 = request('img_6');
        $gallery = [
            ['ev_ID' => $currID, 'image' => $main_img, 'main' => 1], 
            ['ev_ID' => $currID, 'image' => $img_1, 'main' => 2], 
            ['ev_ID' => $currID, 'image' => $img_2, 'main' => 3], 
            ['ev_ID' => $currID, 'image' => $img_3, 'main' => 4], 
            ['ev_ID' => $currID, 'image' => $img_4, 'main' => 5], 
            ['ev_ID' => $currID, 'image' => $img_5, 'main' => 6], 
            ['ev_ID' => $currID, 'image' => $img_6, 'main' => 7]
        ];
        Gallery::insert($gallery); // Eloquent approach
        return redirect('/insert_event')->with('msg', 'New event is added');
    }
}
