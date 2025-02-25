<?php

use App\Http\Controllers\ChapterController;
use App\Http\Controllers\MentorController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('mentors','MentorController@index');
Route::get('mentors/{id}','MentorController@show');
Route::post('mentors', 'MentorController@create');
Route::put('mentors/{id}', 'MentorController@update');
Route::delete('mentors/{id}','MentorController@destroy');

Route::get('courses','CourseController@index');
Route::post('courses', 'CourseController@create');
Route::get('courses/{id}', 'CourseController@show');
Route::put('courses/{id}', 'CourseController@update');
Route::delete('courses/{id}', 'CourseController@destroy');

Route::get('chapters','ChapterController@index');
Route::get('chapters/{id}','ChapterController@show');
Route::post('chapters','ChapterController@create');
Route::put('chapters/{id}', 'ChapterController@update');
Route::delete('chapters/{id}','ChapterController@destroy');

Route::post('lessons','LessonController@create');
Route::put('lessons/{id}','LessonController@update');
Route::get('lessons','LessonController@index');
Route::get('lessons/{id}','LessonController@show');
Route::delete('lessons/{id}','LessonController@destroy');

Route::post('image-courses', 'imageCourseController@create');
Route::delete('image-courses/{id}', 'imageCourseController@destroy');

Route::post('my-courses', 'MyCourseController@create');
Route::get('my-courses', 'MyCourseController@index');
Route::post('my-courses/premium','MyCourseController@createPremiumAccess');

Route::post('reviews', 'ReviewController@create');
Route::put('reviews/{id}', 'ReviewController@update');
Route::delete('reviews/{id}', 'ReviewController@destroy');