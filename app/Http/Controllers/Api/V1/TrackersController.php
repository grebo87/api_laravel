<?php

namespace App\Http\Controllers\Api\V1;

use App\Trackers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Transformers\TrackersTransformer;

class TrackersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Trackers $trackers,Request $request)
    {
        $trackers = $trackers->all();

        return $this->response->collection($trackers, new TrackersTransformer,['data' => 'user']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Trackers  $trackers
     * @return \Illuminate\Http\Response
     */
    public function show(Trackers $trackers)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Trackers  $trackers
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Trackers $trackers)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Trackers  $trackers
     * @return \Illuminate\Http\Response
     */
    public function destroy(Trackers $trackers)
    {
        //
    }
}
