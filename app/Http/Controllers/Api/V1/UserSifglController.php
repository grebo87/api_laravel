<?php

namespace App\Http\Controllers\Api\V1;

use App\UserSifgl;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Transformers\UserSifglTransformer;

class UserSifglController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $user = UserSifgl::findOrFail($id);

        return $this->response->item($user, new UserSifglTransformer);
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
     * @param  \App\UserSifgl  $userSifgl
     * @return \Illuminate\Http\Response
     */
    public function show(UserSifgl $userSifgl)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\UserSifgl  $userSifgl
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserSifgl $userSifgl)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\UserSifgl  $userSifgl
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserSifgl $userSifgl)
    {
        //
    }
}
