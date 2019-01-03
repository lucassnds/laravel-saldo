<?php

$this->group(['middleware' => ['auth'], 'namespace' => 'Admin'], function(){
    $this->get('admin', 'AdminController@index')->name('admin.home');
});

$this->get('/', 'Site\SiteController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
