<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


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

Route::get('/login', function () {
    return view('auth.login');
});



Auth::routes();
/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:admin'])->group(function () {

    Route::get('/home', [HomeController::class, 'index'])->name('home');
	Route::resource('user', 'App\Http\Controllers\UserController');
	Route::resource('/blogs', 'App\Http\Controllers\Admin\BlogController');
	Route::resource('/newz', 'App\Http\Controllers\Admin\NewsController');
	Route::resource('/event', 'App\Http\Controllers\Admin\EventController');
	Route::resource('/vacancy', 'App\Http\Controllers\Admin\VacancyController');
	Route::resource('/files', 'App\Http\Controllers\Admin\FileController');
	Route::resource('/category', 'App\Http\Controllers\Admin\CategoryController');
	Route::resource('/partners', 'App\Http\Controllers\Admin\PartnersController');
	Route::resource('/gallerys', 'App\Http\Controllers\Admin\GController');
	Route::resource('/teams', 'App\Http\Controllers\Admin\TeamsController');
	Route::resource('/testimonials', 'App\Http\Controllers\Admin\TestmonialController');
	Route::resource('/application', 'App\Http\Controllers\Admin\ApplicationController');
	Route::resource('/messages', 'App\Http\Controllers\Admin\MessagesController');
	Route::resource('/contactus', 'App\Http\Controllers\Admin\ContactUs');
	Route::resource('/settings', 'App\Http\Controllers\Admin\Settings');
    Route::resource('/slide', 'App\Http\Controllers\Admin\SlideShows');
    Route::resource('/case_tracker_page', 'App\Http\Controllers\Admin\Stories');
    Route::resource('/program', 'App\Http\Controllers\Admin\Programs');
    Route::resource('/video', 'App\Http\Controllers\Admin\VideoController');
	Route::resource('/volunteer', 'App\Http\Controllers\Admin\VolunteerController');
	Route::resource('/causes', 'App\Http\Controllers\Admin\CausesController');
	Route::resource('/stats', 'App\Http\Controllers\Admin\StatController');
	Route::resource('/followup', 'App\Http\Controllers\Admin\FollowUpController');
	Route::resource('/vision', 'App\Http\Controllers\Admin\AVMController');
	Route::resource('/cores', 'App\Http\Controllers\Admin\CoresController');
	Route::resource('/allprograms', 'App\Http\Controllers\Admin\ProgramsController');





});

// common routes

Route::resource('/','App\Http\Controllers\WebController');
Route::resource('/about','App\Http\Controllers\AboutController');
Route::resource('/donate','App\Http\Controllers\DonateController');
Route::resource('/news','App\Http\Controllers\NewsController');
Route::resource('/contact','App\Http\Controllers\ContactController');
Route::resource('/what','App\Http\Controllers\WhatWeDocontroller');
Route::resource('/vacancies','App\Http\Controllers\VacanciesController');
Route::resource('/gallery','App\Http\Controllers\GalleryController');
Route::resource('/blog','App\Http\Controllers\BlogsController');
Route::resource('/events','App\Http\Controllers\EventsController');
Route::resource('/resources','App\Http\Controllers\ResourcesController');
Route::resource('/testimonial','App\Http\Controllers\TestimonialController');
Route::resource('/partner','App\Http\Controllers\PartnerController');
Route::resource('/mission','App\Http\Controllers\MissionController');
Route::resource('/gallery','App\Http\Controllers\GalleryController');
Route::resource('/message','App\Http\Controllers\MessageController');
Route::resource('/our_work','App\Http\Controllers\SuccessfulStories');
Route::resource('/team','App\Http\Controllers\TeamController');
Route::resource('/volunteers','App\Http\Controllers\VolunteersController');
Route::resource('/cause','App\Http\Controllers\Cause');
Route::resource('/prog','App\Http\Controllers\ProgramController');
Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
Route::get('{page}', ['as' => 'page.index', 'uses' => 'App\Http\Controllers\PageController@index']);





