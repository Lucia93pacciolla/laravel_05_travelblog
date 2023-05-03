<?php

namespace App\Http\Controllers;

use App\Models\Travel;

use Illuminate\Http\Request;

class TravelController extends Controller
{
    public function create(){
        return view('travel.create');
    }

    public function store (Request $request){

        // $travel = new Travel();
        // $travel->title = $request->title;
        // $travel->producer = $request->producer;
        // $travel->description = $request->description;

        

        // $travel->save();

        $travel = Travel::create([

            'title' => $request->title,
            'producer' => $request->producer,
            'description' => $request->description
        ]);

        return redirect(route('homepage'))->with('travelCreate', 'viaggio inserito');

    }

    public function index(){
        $travels = Travel::all();

        

        return view('travel.index', compact('travels'));
    }
}
