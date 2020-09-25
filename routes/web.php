<?php
use Illuminate\Support\Facades\Route;

Route::get('/', 'Common@index');
Route::get('welcome', 'Common@show');
Route::get('text-to-speech/{test}', 'Common@create');
