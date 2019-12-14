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

use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
   return view ('welcome');
});
//Route::get('/', 'ContentController@home')->name('home');

Route::get('/home','HomeController@index');
Auth::routes();
Route::resource('clients','ClientController');
Route::get('/clients/create', 'ClientController@create')->name('new_client');
Route::get('/clients/{id}', 'ClientController@show')->name('show_client');
Route::get('/clients/{id}/edit', 'ClientController@edit')->name('edit_client');

Route::resource('rooms','RoomController');
Route::get('/rooms/create', 'RoomController@create')->name('room_create');
Route::get('/rooms/{id}', 'RoomController@show')->name('room_show');
Route::get('/rooms/{id}/edit', 'RoomController@edit')->name('room_edit');

Route::resource('users','UserController');
Route::get('/users/create', 'UserController@create');
Route::get('/users/{id}', 'UserController@show');
Route::get('/users/{id}/edit', 'UserController@edit');

Route::get('/book/room/{client_id}/{room_id}/{startdate}/{enddate}', 'ReservationController@bookRoom')->name('book_room');

Route::get('/reservations/{client_id}', 'RoomController@CheckAvailableRooms')->name('check_room');
//Route::post('/reservations/{client_id}', 'RoomController@CheckAvailableRooms')->name('check_room');
Route::get('/reservations', function(){

    return view('reservations.index');
});

Route::resource('reservations','ReservationController');
//Route::get('/reservations/create', 'ReservationController@create');
Route::get('event/add','EventController@createEvent');
Route::post('event/add','EventController@store');
Route::get('event','EventController@calender');


Route::get('/rooms/available/description/{room_id}', 'RoomController@roomdescription')->name('room_description');

Route::get('/admin/user/roles',['middleware'=>'IsAdmin', function(){

    return "middleware role";

}]);
//Route::get('/',function(){
//   $user=Auth::user();
  // if($user->IsAdmin()) {
  //   echo "this user is administrator";
 //  }
//});
route::get('/admin' , 'AdminController@index');