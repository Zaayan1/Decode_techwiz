<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Soccerinfo;

class AdminSoccerinfoController extends Controller
{
    public function index()
    {
        $soccerinfos = Soccerinfo::all();
        return view('admin.soccerinfo.index', compact('soccerinfos'));
    }

    public function create()
    {
        return view('admin.soccerinfo.create');
    }

    public function store(Request $request)
    {
        // Validate and store the new soccerinfo
        // ...

        return redirect()->route('admin.soccerinfo.index')->with('success', 'Soccer Info added successfully.');
    }

    public function edit($id)
    {
        $soccerinfo = Soccerinfo::findOrFail($id);
        return view('admin.soccerinfo.edit', compact('soccerinfo'));
    }

    public function update(Request $request, $id)
    {
        // Validate and update the soccerinfo
        // ...

        return redirect()->route('admin.soccerinfo.index')->with('success', 'Soccer Info updated successfully.');
    }

    public function destroy($id)
    {
        $soccerinfo = Soccerinfo::findOrFail($id);
        $soccerinfo->delete();

        return redirect()->route('admin.soccerinfo.index')->with('success', 'Soccer Info deleted successfully.');
    }
}
