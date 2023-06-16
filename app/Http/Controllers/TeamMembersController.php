<?php

namespace App\Http\Controllers;

use App\Models\TeamMembers;
use App\Http\Requests\StoreTeamMembersRequest;
use App\Http\Requests\UpdateTeamMembersRequest;

class TeamMembersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreTeamMembersRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTeamMembersRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TeamMembers  $teamMembers
     * @return \Illuminate\Http\Response
     */
    public function show(TeamMembers $teamMembers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TeamMembers  $teamMembers
     * @return \Illuminate\Http\Response
     */
    public function edit(TeamMembers $teamMembers)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTeamMembersRequest  $request
     * @param  \App\Models\TeamMembers  $teamMembers
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTeamMembersRequest $request, TeamMembers $teamMembers)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TeamMembers  $teamMembers
     * @return \Illuminate\Http\Response
     */
    public function destroy(TeamMembers $teamMembers)
    {
        //
    }
}
