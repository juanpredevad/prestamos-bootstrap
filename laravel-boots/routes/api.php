<?php
use App\Person;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('people', function(Request $request){
    return Person::all();
});
//Get name by ced endpoint
Route::get('people/{ced}', function(Request $request, $ced){
    
    $personByCed = Person::where('ced',$ced)->firstOrFail();
    
    return $personByCed;
});
