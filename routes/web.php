<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




$versionUri = request()->segment(2);
		$listVersionesApp = explode(',',env('API_LIST_VERSIONS', 'v1'));
		$result = in_array($versionUri , $listVersionesApp);
		/*
		|--------------------------------------------------------------------------
		| Check if there is the Version passed by the Url
		| in the list of official Versions of the Api
		|--------------------------------------------------------------------------
		*/
		if($result){
		    $version = $versionUri;
		    $prefix  = env('API_PREFIX', null) . '/'. $version;
		}else{
		    $version = 'v1';
		    $prefix  = env('API_PREFIX', null);
		}






Route::get('/', function () {
	$user = \DB::table('users')->distinct()->first();
    return view('welcome')->with('user',$user);
});


$api = app('Dingo\Api\Routing\Router');

$api->version('v1', function ($api) {
    $api->get('users/{id}','App\Http\Controllers\Api\V1\UserSiaglController@index');
    $api->get('users-sifgl/{id}','App\Http\Controllers\Api\V1\UserSifglController@index');
    $api->get('get-trackers','App\Http\Controllers\Api\V1\TrackersController@index');
});


$api->version('v2', function ($api) {
    $api->get('users/{id}',function($id)
    {
    	$user = \DB::table('users')->distinct()->find($id);
    	return response()->json([$user,'v2']);
    });
});
