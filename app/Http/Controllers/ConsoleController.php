<?php

namespace App\Http\Controllers;

use App\Models\Console;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ConsoleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index', 'show');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $consoles = Console::all();

        return view('console.index', compact('consoles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('console.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $console = Console::create([
            'name' => $request->name,
            'brand' => $request->brand,
            'description' => $request->description,
            'user_id' => Auth::user()->id
        ]);

        return redirect(route('console.index'))->with('consoleCreated', 'hai scelto la tua compagnia');
    }

    /**
     * Display the specified resource.
     */
    public function show(Console $console)
    {
       
        return view('console.show', compact ('console'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Console $console)
    {
        return view('console.edit', compact('console'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Console $console)
    {
        $console->update([
            'name' => $request->name,
            'brand' => $request->brand,
            'description' => $request->description,

        ]);

        return redirect(route('console.index'))->with('consoleUpdated', 'Aggiornato correttamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Console $console)
    {
        $console->delete();

        return redirect(route('console.index'))->with('consoleDeleted', 'Eliminato correttamente');
    }
}
