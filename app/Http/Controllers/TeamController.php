<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams = Team::paginate(5);
        return view('admin.team.index', compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.team.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
            'twitter' => 'required|url',
            'facebook' => 'required|url',
            'instagram' => 'required|url'
        ]);

        $data = array();

        $data['name'] = $request->name;
        $data['description'] = $request->description;
        $data['twitter'] = $request->twitter;
        $data['facebook'] = $request->facebook;
        $data['instagram'] = $request->instagram;

        $image = $request->file('image');
        $imgone = rand() . '.' . $image->getClientOriginalExtension();
        $path = $request->file('image')->storeAs('teams', $imgone, 'public');
        $data['image'] = $imgone;

        Team::create($data);

        return redirect()->route('teams')->with('message', 'data added successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Team $team
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Team $team
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $team = Team::findorFail($id);
        return view('admin.team.edit', compact('team'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Team $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $team = Team::findorFail($id);

        $oldimg = Storage::path($team->image);

        $data = array();

        $data['name'] = $request->name;
        $data['facebook'] = $request->facebook;
        $data['twitter'] = $request->twitter;
        $data['instagram'] = $request->instagram;
        $data['description'] = $request->description;


        $newimg = $request->file('image');
        if ($newimg) {
            Storage::disk('public')->delete("teams" . $oldimg);
            $image = $request->file('image');
            $img = rand() . '.' . $image->getClientOriginalExtension();
            $path = $request->file('image')->storeAs('teams', $img, 'public');
            $data['image'] = $img;

            $team->update($data);

        }

        return redirect()->route('teams')->with('message', 'Team data updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Team $team
     * @return \Illuminate\Http\Response
     */
    public
    function destroy($id)
    {
        $team = Team::findorFail($id);
        $team->delete();

        return redirect()->route('teams')->with('message', 'Team data deleted successfully');
    }
}

