Route::get('/register', 'App\Http\Controllers\RegisterController@showRegistrationForm')->name('register');
Route::post('/register', 'App\Http\Controllers\RegisterController@register');

Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/login', 'Auth\LoginController@login');

Route::resource('soccerinfo', 'SoccerinfoController');