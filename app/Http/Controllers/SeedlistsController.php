<?php

namespace App\Http\Controllers;

use App\Models\Seedlists;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SeedlistsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $seedlists = DB::table('seedlist')
            ->select('published_place')
            ->where('published_place', '<>', '')
            ->distinct()
            ->orderBy('published_place', 'asc')
            ->get();

        foreach ($seedlists as $seedlist) {
            
            $seedlist_years = DB::table('seedlist')
                ->select('published_year', 'nid')
                ->where('published_place', '=', $seedlist->published_place)
                ->distinct()
                ->orderBy('published_year', 'asc')
                ->get();
            $seedlist->years = $seedlist_years;
        }
       

        return view('seedlists.index', [
            'seedlists' => $seedlists,
        ]);




    }

    public function show_seedlist($id)
    {

        $my_seedlist = DB::table('seedlist')
            ->select()
            ->where('nid', '=', $id)
            ->first();       

        $my_pictures = DB::table('files')
            ->select()
            ->where('nid', '=', $id)
            ->get();  

        $related_plants = DB::table('plant')
            ->select()
            ->where('published_year', '=', $my_seedlist->published_year)
            ->where('published_place', '=', $my_seedlist->published_place)
            ->get();  

        return view('seedlists.list', [
            'my_seedlist' => $my_seedlist,
            'my_pictures' => $my_pictures,
            'related_plants' => $related_plants,
        ]);
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
    public function store()
    {        
        return view('plants.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Seedlists  $seedlists
     * @return \Illuminate\Http\Response
     */
    public function show(Seedlists $seedlists)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Seedlists  $seedlists
     * @return \Illuminate\Http\Response
     */
    public function edit(Seedlists $seedlists)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Seedlists  $seedlists
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Seedlists $seedlists)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Seedlists  $seedlists
     * @return \Illuminate\Http\Response
     */
    public function destroy(Seedlists $seedlists)
    {
        //
    }
}
