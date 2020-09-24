<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function home() {
        // $event = Event::all();
        $event = Event::where('cat', 2)->get();
        $highlight = Event::where('ev_ID', 2)->first();
        return view('home', ['event' => $event, 'highlight' => $highlight]);
    }

    public function insert() {
        return view('insert_event');
    }

    public function store() {
        $event = new Event();
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
        return redirect('/insert_event')->with('msg', 'New event is added');
    }
}
