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
