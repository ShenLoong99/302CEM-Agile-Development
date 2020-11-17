<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Event;
use App\Models\Booking_List;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('welcome');
    }

    public function notification() {
        $mem_ID = Auth::id();
        $reg = Booking_List::where('mem_ID', $mem_ID)->get();

        $all_ev_id = array();

        foreach ($reg as $key => $value) {
            // delete duplicate event id if user registered the same event for multiple times
            foreach ($all_ev_id as $ev_id) {
                if ($ev_id == $value["ev_ID"]) {
                    unset($reg[$key]);
                }
            }
            array_push($all_ev_id, $value["ev_ID"]);

            $events = Event::where('id', $value["ev_ID"])->first();
            $value["ev_ID"] = $events["id"];
            $value["ev_name"] = $events["ev_name"];
            $value["updated_at"] = $events["updated_at"];

            // delete event record there is no changes after user register
            if($events["updated_at"] < $value["created_at"])
            {
                unset($reg[$key]);
            }
        }

        // sort by latest updated date
        $reg = $reg->sortByDesc('updated_at');


      return view('welcome', ['notifications' => $reg]); 
  }
}
