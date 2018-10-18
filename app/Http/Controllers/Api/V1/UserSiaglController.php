<?php

namespace App\Http\Controllers\Api\V1;

use App\UserSiagl;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\UserSiaglResource;
use App\Http\Transformers\UserSiaglTransformer;

class UserSiaglController extends Controller
{

    public function __construct()
    {
        //allocates the necessary execution time for the script
        ini_set('max_execution_time', 0); //0 seconds = unlimite
        //allocates the memory size needed for the process
        ini_set('memory_limit', -1);// -1 = unlimite
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $user = UserSiagl::paginate(3);

        //dd(ini_get('max_execution_time'),ini_get('memory_limit') );

        //return  UserSiaglResource::collection($user);

        return $this->response->array($user, new UserSiaglTransformer);
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
     * @param  \App\UserSiagl  $userSiagl
     * @return \Illuminate\Http\Response
     */
    public function show(UserSiagl $userSiagl)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\UserSiagl  $userSiagl
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserSiagl $userSiagl)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\UserSiagl  $userSiagl
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserSiagl $userSiagl)
    {
        //
    }
}
