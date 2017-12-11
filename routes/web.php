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

Route::get('/', 'HomeController@home');
Route::get('/contacto', 'HomeController@contact');
Route::get('/servicios/diseño-pagina-web-bogota', 'HomeController@wedo');
Route::get('/servicios/desarrollo-aplicaciones-bogota', 'HomeController@apps');
Route::get('/servicios/marketing-digital', 'HomeController@marketing');
Route::get('/servicios/e-learning', 'HomeController@learning');
Route::get('/servicios/diseño-animacion-3d', 'HomeController@ThreeD');
Route::get('/portafolio', 'HomeController@portfolios');
Route::get('/portafolio/{porfolio}', 'HomeController@portfolio');
Route::get('/quienes-somos', 'HomeController@culture');
Route::get('/quienes-somos', 'HomeController@culture');
Route::get('/blogs', 'HomeController@blogs');
Route::get('/blog_categoria/{category_name}', 'HomeController@blog_category');
Route::get('/blog/{blog}', 'HomeController@blog');
Route::get('/blog_tag/{tag}','HomeController@searchBlogTag');
//Route::get('/buscar', 'HomeController@searchBlog');


Route::get('servicios/desarrollo-web',function(){
    return redirect('/servicios/desarrollo-aplicaciones-bogota');
});
Route::get('servicios/desarrollo-apps',function(){
    return redirect('/servicios/desarrollo-aplicaciones-bogota');
});
Route::get('servicios/marketing',function(){
    return redirect('/servicios/marketing-digital');
});
Route::get('servicios/diseño-3d',function(){
    return redirect('/servicios/diseño-animacion-3d');
});

Route::get('buscar', [
    'as' => 'search',
    'uses' => 'HomeController@searchBlog'
]);


Route::post('/contactProject', [
    'as' => 'contactProject',
    'uses' => 'HomeController@contactProject'
]);
Route::post('/contactMessage', [
    'as' => 'contactMessage',
    'uses' => 'HomeController@contactMessage'
]);


Route::get('like', function(SammyK\LaravelFacebookSdk\LaravelFacebookSdk $fb) {
    $login_link = $fb
        ->getRedirectLoginHelper()
        ->getLoginUrl('https://exmaple.com/facebook/callback', ['email', 'user_events']);

    echo '<a href="' . $login_link . '">Log in with Facebook</a>';
});