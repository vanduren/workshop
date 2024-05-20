<?php

namespace App\Http\Controllers;

use App\Models\Participant;
use App\Models\Role;
use Illuminate\Http\Request;

class ParticipantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roleCountArray = [];
        $counts = Participant::all()->countBy('role_id');
        foreach($counts as $key => $count) {
            $roleCountArray += [Role::find($key)->name =>  $count];
        }

        return view('participants.index', [
            'participants' => Participant::all(),
            'roleCounts' => collect($roleCountArray),
        ]);
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
    public function show(Participant $participant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Participant $participant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Participant $participant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Participant $participant)
    {
        //
    }
}
