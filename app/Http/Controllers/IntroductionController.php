<?php

namespace App\Http\Controllers;

use App\Models\Introduction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IntroductionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        // Check for search input
        if (request('search_genus')) {
            $plants = DB::table('plant')
                ->where('genus', 'like', '%' . request('search_genus') . '%')
                ->get();
        }
        elseif (request('search_species')) {
            $plants = DB::table('plant')
                ->where('species', 'like', '%' . request('search_species') . '%')
                ->get();
        } 
        elseif (request('search_author')) {
            $plants = DB::table('plant')
                ->where('author', 'like', '%' . request('search_author') . '%')
                ->get();
        } 
        elseif (request('search_place')) {
            $plants = DB::table('plant')
                ->where('published_place', 'like', '%' . request('search_place') . '%')
                ->get();
        } 
        elseif (request('search_year')) {
            $plants = DB::table('plant')
                ->where('published_year', 'like', '%' . request('search_year') . '%')
                ->get();
        } else {
            $plants = DB::table('plant')
                        ->select()
                        ->where('genus', '<>', '')
                        ->where('species', '<>', '')
                        ->orderBy('genus', 'asc')
                        ->get();
        }
    
        return view('introduction.index')->with('plants', $plants);
     
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'message' => 'required|string|max:255',
        ]);

        $request->user()->chirps()->create($validated);

        return redirect(route('chirps.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Chirp  $chirp
     * @return \Illuminate\Http\Response
     */
    public function show(Introduction $chirp)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Chirp  $chirp
     * @return \Illuminate\Http\Response
     */
    public function edit(Introduction $chirp)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Chirp  $chirp
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Introduction $chirp)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Chirp  $chirp
     * @return \Illuminate\Http\Response
     */
    public function destroy(Introduction $chirp)
    {
        //
    }
}
