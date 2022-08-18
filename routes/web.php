<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes fProductTypeControlleror your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
;



Route::get('/','IndexController@index')->name('index');
Route::get('/backoffice', 'Auth\LoginController@getBackoffice')->name('backoffice');

Route::namespace('Auth')->prefix('auth')->name('auth.')->group(function () {
    Route::get('/login', 'LoginController@showLoginForm')->name('login')->middleware('guest');
    Route::post('/login', 'LoginController@login');
    Route::get('logout', 'LoginController@logout')->name('logout');

});

Route::middleware('auth')->namespace('Admin')->prefix('admin')->name('admin.')->group(function () {
    Route::resource('/products', 'ProductController');
    Route::resource('/users', 'UserController');
    Route::resource('/roles', 'RoleController');
    Route::resource('/worksends', 'WorksendController');
    Route::get('worksends/id/{id}/{work_send_id}', 'WorksendController@edit_worksend')->name('worksends.gallery_sendworks');


    Route::resource('/employee_worksends', 'EmployeeworksendController');
    Route::get('employee_worksends/lists/id/{id}', 'EmployeeworksendController@lists')->name('employee_worksends.lists');
    Route::get('employee_worksends/id/{id}', 'EmployeeworksendController@create_worksend')->name('employee_worksends.create');
    Route::get('employee_worksends/edit/id/{id}/{work_send_id}', 'EmployeeworksendController@edit_worksend')->name('employee_worksends.edit');
    Route::PUT('employee_worksends/edit/id/{id}/{work_send_id}', 'EmployeeworksendController@update_worksend')->name('employee_worksends.update');
    Route::post('employee_worksends/id/{id}', 'EmployeeworksendController@store_galleries')->name('employee_worksends.store');
    Route::DELETE('employee_worksends/id/{id}', 'EmployeeworksendController@delete_galleries')->name('employee_worksends.destroy');

    Route::resource('/works', 'WorkController');
    Route::get('works/galleries/{id}', 'WorkController@galleries')->name('gallery.lists');
    Route::post('works/galleries/{id}', 'WorkController@store_galleries')->name('gallery.store');
    Route::DELETE('works/galleries/{id}', 'WorkController@delete_galleries')->name('gallery.destroy');

    Route::get('/foo', function () {
        Artisan::call('storage:link');
    });

});
