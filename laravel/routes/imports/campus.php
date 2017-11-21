<?php

Route::get('/campus', [
           'as'            => 'campus',
	       'middleware'    => 'auth',
           'uses'          => 'CampusController@index'
        ]);

Route::get('/campus/formulario', [
           'as'            => 'campus',
	       'middleware'    => 'auth',
           'uses'          => 'CampusController@formulario'
        ]);
Route::post('/campus/salvar', 'CampusController@salvar');
Route::get('/campus/{id}/editar', 'CampusController@editar');
Route::get('/campus/{id}/remover', 'CampusController@remover');
