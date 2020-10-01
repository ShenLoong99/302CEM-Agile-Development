<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Gallery;

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
}
