 <?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



Route::group(['middleware'=>['web']],function(){

Route::get('auth/login',['as'=>'login','Auth\AuthController@getLogin']);
Route::post('auth/login','Auth\AuthController@postLogin');
Route::get('auth/logout','Auth\AuthController@getLogout');

Route::get('auth/register','Auth\AuthController@getRegister');
Route::post('auth/register','Auth\AuthController@postRegister');


Route::get('firstpage','PageController@getFirstpage');
Route::get('entext','PageController@getEntext');
Route::get('blog',['uses'=>'BlogController@getIndex','as'=>'blog.index']);
Route::get('blog/{slug}',['as'=>'blog.single','uses'=>'BlogController@getSingle'])->where('slug','[\w\d\-\_]+');
Route::get('out','PageController@getAbout');

Route::get('contact','PageController@getContact');

Route::resource('posts','PostController');

Route::resource('categories','CategoryController',['except'=>['create']]);

Route::auth();

Route::get('/home', 'PageController@getFirstpage');
Route::get('/', 'PageController@getFirstpage');
 Route::post('/like',['uses'=>'PostController@LikePost','as'=>'like']);
});
