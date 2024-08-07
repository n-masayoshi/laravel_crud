<?php

namespace App\Http\Controllers\Players;

use App\Models\Players\JapanesePlayer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
// use Illuminate\Routing\Controller as BaseController;
// use Illuminate\View\View;

class JapanesePlayersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function index(Request $request, $country_id)
    public function index()
    {
        // dd($country_id);
        // $japanesePlayers = JapanesePlayer::where('country_id', $country_id)->select('player_name', 'player_age', 'club_team_name')->get();
        // $japanesePlayers = JapanesePlayer::select(
            //     'player_name',
            //     'player_age',
            //     'club_team_name',
            // );
            // )->paginate(5);
            // dd($japanesePlayers);
        $japanesePlayers = JapanesePlayer::all();
        return view("players.japan.index", compact('japanesePlayers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Players $players)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Players $players)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Players $players)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Players $players)
    {
        //
    }
}
