<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::view('/', 'pages.home');

Route::post('/contact', [ContactController::class, 'send'])
    ->name('contact.send');

Route::get('/proyecto/{slug}', function ($slug) {
    return view('pages.project', compact('slug'));
})->name('project.show');


Route::view('/proyectos/dragon-boat', 'projects.dragon-boat')
    ->name('projects.dragon-boat');

Route::view('/proyectos/ironshark', 'projects.ironshark')
    ->name('projects.ironshark');

Route::view('/proyectos/zaira-psicologia', 'projects.zaira')
    ->name('projects.zaira');

Route::view('/proyectos/geolindes', 'projects.geolindes')
    ->name('projects.geolindes');

Route::view('/proyectos/grupo-marina-1993', 'projects.grupo-marina-1993')
    ->name('projects.grupo-marina-1993');

Route::view('/proyectos/masia-vistalegre', 'projects.masia-vistalegre')
    ->name('projects.masia-vistalegre');