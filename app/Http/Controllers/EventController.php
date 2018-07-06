<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;

class EventController extends Controller
{
    public function sports(){
        $items = Event::where('category', 'sports')->get();
        return view ('events.categories.sport_index', ['items' => $items]);
        
    } 
    public function beauty(){
        $items = Event::where('category', 'beauty')->get();
        return view ('events.categories.beauty_index', ['items' => $items]);
        
    }
    public function arts(){
        $items = Event::where('category', 'arts')->get();
        return view ('events.categories.art_index', ['items' => $items]);
        
    }
    public function technology(){
        $items = Event::where('category', 'technology')->get();
        return view ('events.categories.technology_index', ['items' => $items]);
        
    }
    public function nature(){
        $items = Event::where('category', 'nature')->get();
        return view ('events.categories.nature_index', ['items' => $items]);
        
    }
    public function language(){
        $items = Event::where('category', 'language')->get();
        return view ('events.categories.language_index', ['items' => $items]);
        
    }
    public function food(){
        $items = Event::where('category', 'food')->get();
        return view ('events.categories.food_index', ['items' => $items]);
        
    }
    public function others(){
        $items = Event::where('category', 'others')->get();
        return view ('events.categories.others_index', ['items' => $items]);
        
    }
}
