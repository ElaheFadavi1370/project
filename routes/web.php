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

//Route::get('/', 'ContentController@home')->name('home');

//Route::get('/home','HomeController@index');
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
Route::get('/users/create', 'UserController@create')->name('new_user');
Route::get('/users/{id}', 'UserController@show')->name('show_user');
Route::get('/users/{id}/edit', 'UserController@edit')->name('edit_user');

Route::get('/book/room/{client_id}/{room_id}/{startdate}/{enddate}', 'ReservationController@bookRoom')->name('book_room');
Route::get('/reservations/{client_id}', 'RoomController@CheckAvailableRooms')->name('check_room');
Route::post('/reservations/{client_id}', 'RoomController@CheckAvailableRooms')->name('check_room');
//Route::get('/reservations', 'ReservationController@index');

Route::resource('reservations','ReservationController');
Route::get('/reservations/create', 'ReservationController@create')->name('reservation_create');
Route::get('/reservations/edit', 'ReservationController@edit')->name('reservation_edit');
Route::get('event/add','EventController@createEvent');
Route::post('event/add','EventController@store');
Route::get('event','EventController@calender');


Route::get('/rooms/available/description/{room_id}', 'RoomController@roomdescription')->name('room_description');

//Route::get('/admin/user/roles',['middleware'=>'IsAdmin', function(){

  //  return "middleware role";

//}]);
//Route::get('/',function(){
//   $user=Auth::user();
  // if($user->IsAdmin()) {
  //   echo "this user is administrator";
 //  }
//});
//Route::get('/admin' , 'AdminController@index');
Route::group(['middleware'=>['web', 'auth']], function() {
    Route::get('/', function () {
        return view('welcome');
    });
    Route::get('/home', function(){
        if(Auth::user()->admin==0){
            return view('home');
        }else {
            $Users['users']= \App\User::all();
            $Rooms['rooms']= \App\Room::all();
            return view('adminhome', $Users, $Rooms);
        }
    });
});
Route::get('/carousel','CarouselController@carousel');