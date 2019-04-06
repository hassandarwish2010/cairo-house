<?php

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

/*
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
*/

Route::group([
    'prefix' => '{lang}',
    'where' => ['lang' => '(en|ar)'],
    'middleware' => 'api-lang'
], function() {
    // Contact submit
    Route::post('/contact', 'Web\Contact\ContactController@submit')->name('contact.save');

    // Apply job
    Route::post('/job/apply/{id}', 'Web\Jobs\JobController@apply')->name('job.apply');
});
