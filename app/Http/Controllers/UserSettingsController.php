<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserSettingsForm;
use App\UserSettings;
use Illuminate\Http\Request;

class UserSettingsController extends Controller
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserSettingsForm $request)
    {
        $content = $request->validated();

        $request->user()->settings['values'] = $content;
        $request->user()->settings->save();

        return response()->json([
            'success' => true,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\UserSettings  $userSettings
     * @return \Illuminate\Http\Response
     */
    public function show(UserSettings $userSettings)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\UserSettings  $userSettings
     * @return \Illuminate\Http\Response
     */
    public function edit(UserSettings $userSettings)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\UserSettings  $userSettings
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserSettings $userSettings)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\UserSettings  $userSettings
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserSettings $userSettings)
    {
        //
    }
}
