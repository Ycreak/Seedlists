<?php

namespace App\Http\Controllers;

use App\Models\Plants;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PlantsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {          
        $plants = DB::table('plant')
                    ->select()
                    ->where('genus', '<>', '')
                    ->where('species', '<>', '')
                    ->orderBy('genus', 'asc')
                    ->get();
            
        return view('plants.index', [
            'plants' => $plants,
        ]);     
    }

    public function show_plant($id)
    {
        $plant = DB::table('plant')
            ->select()
            ->where('nid', '=', $id)
            ->first();       

        $my_pictures = $this->retrieve_pictures($plant);

        $parent_seedlist = $this->retrieve_parent_seedlist($plant);

        return view('plants.list', [
            'plant' => $plant,
            'my_pictures' => $my_pictures,
            'parent_seedlist' => $parent_seedlist,
        ]);
    }

    private function retrieve_pictures($plant)
    {
        return DB::table('files')
            ->select()
            ->where('nid', '=', $plant->nid)
            ->get();  
    }

    private function retrieve_parent_seedlist($plant)
    {
        return DB::table('seedlist')
        ->select()
        ->where('published_year', '=', $plant->published_year)
        ->where('published_place', '=', $plant->published_place)
        ->first();  
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
        $query = DB::table ('plant');

        if ($request->search_genus != '') {
            $query->where('genus', 'like', '%' . $request->search_genus . '%');
        } 
        if ($request->search_species != '') {
            $query->where('species', 'like', '%' . $request->search_species . '%');
        } 
        if ($request->search_author != '') {
            $query->where('author', 'like', '%' . $request->search_author . '%');
        } 
        if ($request->search_place != '') {
            $query->where('published_place', 'like', '%' . $request->search_place . '%');
        } 
        if ($request->search_year != '') {
            $query->where('published_year', 'like', '%' . $request->search_year . '%');
        } 

        $result = $query->get();

        return view('plants.index', [
            'plants' => $result,
        ]);
    }

    public function add(Request $request)
    {   
        $plants = Plants::create([
            'author' => $request->author,
            'genus' => $request->genus,
            'species' => $request->species,
            'title' => $request->title,
            'published_place' => $request->published_place,
            'published_in' => $request->published_in,
            'published_year' => $request->published_year,
            'original_in' => $request->original_in,
            'notes' => $request->notes,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Plants  $plants
     * @return \Illuminate\Http\Response
     */
    public function show(Plants $plants)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Plants  $plants
     * @return \Illuminate\Http\Response
     */
    public function edit(Plants $plants)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Plants  $plants
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Plants $plants)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Plants  $plants
     * @return \Illuminate\Http\Response
     */
    public function destroy(Plants $plants)
    {
        //
    }
}
