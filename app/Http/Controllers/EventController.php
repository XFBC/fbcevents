<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Event;

class EventController extends Controller
{
    //View Home
    public function index() {
        $events = Event::all(); // pega todos os eventos do BD para exibir na view

        return view('paginainicial',['events' => $events]);
    } 

    //View Criar evento
    public function create(){

        return view('events.create'); //View create.blade.php
    }



    // Post da página de eventos
    public function store(Request $request) {

        $event = new Event;

        $event->title = $request->title;
        $event->city = $request->city;
        $event->private = $request->private;
        $event->description = $request->description;
        $event->participants = $request->participants;
       
        

        $event->save();

       return redirect('/');

       
    }
    

}


  
