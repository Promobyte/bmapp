<?php

/**
 * Global Routes
 * Routes that are used between both frontend and backend.
 */


Route::get('projects', 'ProjectsController@index');
Route::get('project', '/Backend/Auth/ProjectController@index');
Route::post('login', 'ProjectsController@index');

Route::get('projects/{id}', 'ProjectsController@get_hours');
Route::post('projects/{id}', 'ProjectsController@add_hours');

// Switch between the included languages
Route::get('lang/{lang}', 'LanguageController');

/*
 * Frontend Routes
 * Namespaces indicate folder structure
 */
Route::group(['namespace' => 'Frontend', 'as' => 'frontend.'], function () {
    include_route_files(__DIR__.'/frontend/');
});

/*
 * Backend Routes
 * Namespaces indicate folder structure
 */
Route::group(['namespace' => 'Backend', 'prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'admin'], function () {
    /*
     * These routes need view-backend permission
     * (good if you want to allow more than one group in the backend,
     * then limit the backend features by different roles or permissions)
     *
     * Note: Administrator has all permissions so you do not have to specify the administrator role everywhere.
     * These routes can not be hit if the password is expired
     */
    include_route_files(__DIR__.'/backend/');
});
