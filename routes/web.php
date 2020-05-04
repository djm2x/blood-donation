<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;



Route::get('', 'HomeController@index')->name('home');
Route::get('/activite', 'ActiviteController@list')->name('activite');
Route::get('/activite/{id}', 'ActiviteController@detail')->name('detail-activite');


Route::get('/planification', 'PlanificationController@page')->name('planification');
Route::get('/president', 'PresidentController@list')->name('president');
Route::get('/blog', 'BlogController@list')->name('blog');
// Route::get('/partenaire', 'PartenaireController@list')->name('partenaire');
Route::get('/galerie', 'GalerieController@list')->name('galerie');
Route::get('/detail-galerie/{id}', 'GalerieController@detail')->name('detail-galerie');
Route::get('/contact', 'ContactController@create')->name('contact');

Route::get('/phpinfo', function() {
    return phpinfo();
});


Route::fallback(function (string $route) {

    if(begnWith($route, "admin") || begnWith($route, "auth")) {
        return View::make('index');
    }

    return redirect('');
});


function begnWith($str, $begnString) {
    $len = strlen($begnString);
    return (substr($str, 0, $len) === $begnString);
}
