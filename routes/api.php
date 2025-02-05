<?php

use App\Http\Controllers\Api\v1\SubmitApiController;
use Illuminate\Support\Facades\Route;

//Route::get('/user', function (Request $request) {
//    return $request->user();
//})->middleware('auth:sanctum');


//'https://laravel.com/docs/11.x/routing#the-default-route-files'
//'https://laravel.com/docs/7.x/controllers#resource-controllers'
//'https://stackoverflow.com/questions/62522234/difference-between-a-controller-and-a-resource-controller-in-laravel' // Crud

//Verb 	URI 	Action 	Route Name
//GET 	/photos 	index 	photos.index
//GET 	/photos/create 	create 	photos.create
//POST 	/photos 	store 	photos.store
//GET 	/photos/{photo} 	show 	photos.show
//GET 	/photos/{photo}/edit 	edit 	photos.edit
//PUT/PATCH 	/photos/{photo} 	update 	photos.update
//DELETE 	/photos/{photo} 	destroy 	photos.destroy


Route::prefix('v1')->group(function () {
    Route::ApiResource('submits', SubmitApiController::class);
});
