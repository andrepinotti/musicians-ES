<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Event;

class MusicianController extends Controller
{

    public function index(){
        
        $events = Event::all();
        

        $mostFrequentMusician = DB::table('events')
        ->select('name_musician')
        ->groupBy('name_musician')
        ->orderByRaw('COUNT(*) DESC')
        ->limit(1)
        ->value('musician');
        
        
        $media = Event::where('name_musician', $mostFrequentMusician)->avg('cache');
        
        return view('welcome', ['events' => $events , 'mostFrequentMusician' => $mostFrequentMusician, 'media' => $media]);

    }


    public function musician(){


        $events = Event::all();//we'll call all the registers of the bank
        $mostFrequentMusician = DB::table('events')//show the artist with most Events
        ->select('name_musician')
        ->groupBy('name_musician')
        ->orderByRaw('COUNT(*) DESC')
        ->limit(1)
        ->value('musician');

        return view('musician', ['events' => $events], ['mostFrequentMusician' => $mostFrequentMusician]);
    }

    public function store(Request $request){

        $event = new Event;

        $event->name = $request->name;
        $event->name_musician = $request->name_musician;
        $event->cache = $request->cache;
        $event->date_event = $request->date_event; 
        $event->adress = $request->adress;

        $event->save();

        return redirect('/')->with('msg', 'Sucessful!'); //we'll redirect for main page and show a flash message

    }

    public function dashboard(){
        
        $events = Event::all();

        return view('dashboard', ['events' => $events]);
    }


    public function destroy($id){
        Event::findOrFail($id)->delete($id);

        return redirect('/dashboard')->with('msg', 'Event deleted successfully!');
    }

    public function edit($id){

        $events = Event::findOrFail($id);

        return view('edit', ['events' => $events]);

    }

    public function update(Request $request){

        Event::findOrFail($request->id)->update($request->all());

        return redirect('/dashboard')->with('msg', 'Event updateted successfully!');

    }

}
