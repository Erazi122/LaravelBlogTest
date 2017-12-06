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

Route::get('/', 'HomeController@index');
Route::get('/about', 'HomeController@about');

Route::get('/blog', 'BlogController@index');

Route::group(['middleware' => 'auth'], function() {
    Route::get('/tickets', 'TicketController@index');
    
    Route::get('/tickets/create', 'TicketController@create')->name('ticket.create');
    Route::post('/tickets/create', 'TicketController@store');
    
    Route::get('/tickets/{slug}', 'TicketController@show');

    Route::get('/blog/{slug}', 'BlogController@show');
});

Route::group(['middleware' => 'admin'], function() {
    Route::get('/tickets/{slug}/edit', 'TicketController@edit');
    Route::patch('/tickets/{slug}/edit', 'TicketController@update');
    
    Route::delete('/tickets/{slug}', 'TicketController@destroy');
});

// Route::get('/sendemail', function () {
//     $data = [
//         'name' => 'Learning Laravel'
//     ];

//     Mail::send('emails.welcome', $data, function ($message) {
//         $message->from('bal.wladimir@gmail.com', 'Learning Laravel');
//         $message->to('bal.wladimir@gmail.com')->subject('Learning Laravel');
//     });

//     return 'Your email has been sent successfully';
// });

// Route::get('users/register', '\Auth\AuthController@getRegister');

//Auth::routes(); // === Route::auth(); 
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');
// Registration Routes...
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');
// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm');
Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.request');

Route::get('/', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'admin'], function() {

    Route::get('/', 'PageController@index');

    Route::get('users', 'UserController@index')->name('admin.user.index');
    Route::get('users/{user}/edit', 'UserController@edit');
    Route::patch('users/{user}/edit', 'UserController@update');

    Route::get('roles', 'RoleController@index');
    Route::get('roles/create', 'RoleController@create')->name('admin.role.create');
    Route::post('roles/create', 'RoleController@store');

    Route::get('posts', 'PostController@index');
    Route::get('posts/create', 'PostController@create');
    Route::post('posts/create', 'PostController@store');
    Route::get('posts/{post}/edit', 'PostController@edit');
    Route::patch('posts/{post}/edit', 'PostController@update');

    Route::get('categories', 'CategoryController@index');
    Route::get('categories/create', 'CategoryController@create');
    Route::post('categories/create', 'CategoryController@store');
    
});








Route::post('/comment', 'CommentController@store');
