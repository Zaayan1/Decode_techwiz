<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Soccerinfo;


class SoccerinfoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $soccerinfos = Soccerinfo::all();
        return view('soccerinfo.index', compact('soccerinfos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('soccerinfo.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate and store the new soccerinfo
        $soccerinfo = new Soccerinfo;
        $soccerinfo->heading = $request->heading;
        $soccerinfo->description = $request->description;
        $soccerinfo->images = $request->images;
        $soccerinfo->videos = $request->videos;
        $soccerinfo->save();

        return redirect()->route('soccerinfo.index')->with('success', 'Soccer Info added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $soccerinfo = Soccerinfo::findOrFail($id);
        return view('soccerinfo.edit', compact('soccerinfo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validate and update the soccerinfo
        $soccerinfo = Soccerinfo::findOrFail($id);
        $soccerinfo->heading = $request->heading;
        $soccerinfo->description = $request->description;
        $soccerinfo->images = $request->images;
        $soccerinfo->videos = $request->videos;
        $soccerinfo->save();
        return redirect()->route('soccerinfo.index')->with('success', 'Soccer Info updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $soccerinfo = Soccerinfo::findOrFail($id);
        $soccerinfo->delete();

        return redirect()->route('soccerinfo.index')->with('success', 'Soccer Info deleted successfully.');
    }
}
