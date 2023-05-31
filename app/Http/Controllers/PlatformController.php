<?php

namespace App\Http\Controllers;

use App\Models\Platform;
use App\Http\Requests\StorePlatformRequest;
use App\Http\Requests\UpdatePlatformRequest;
use Illuminate\Support\Str;

class PlatformController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $platforms = Platform::all();
        return view('admin.platforms.index', compact('platforms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.platforms.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePlatformRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePlatformRequest $request)
    {
        $data = $request->validated();

        $platform = new Platform();
        $platform->fill($data);

        $platform->slug =  Str::slug($data['name']);

        $platform->save();

        return redirect()->route('admin.platforms.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Platform  $platform
     * @return \Illuminate\Http\Response
     */
    public function show(Platform $platform)
    {
        return view('admin.platforms.show', compact('platform'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Platform  $platform
     * @return \Illuminate\Http\Response
     */
    public function edit(Platform $platform)
    {
        return view('admin.platforms.edit', compact('platform'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePlatformRequest  $request
     * @param  \App\Models\Platform  $platform
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePlatformRequest $request, Platform $platform)
    {
        $data = $request->validated();
        $platform->slug =  Str::slug($data['name']);
        $platform->update($data);

        return redirect()->route('admin.platforms.index', $platform->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Platform  $platform
     * @return \Illuminate\Http\Response
     */
    public function destroy(Platform $platform)
    {
        $platform->delete();

        return redirect()->route('admin.platforms.index');
    }
}
