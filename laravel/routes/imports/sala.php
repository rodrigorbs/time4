<?php

Route::get('/sala', [
           'as'            => 'sala',
	       'middleware'    => 'auth',
           'uses'          => 'SalaController@index'
        ]);

Route::get('/sala/formulario', [
           'as'            => 'sala',
	       'middleware'    => 'auth',
           'uses'          => 'SalaController@formulario'
        ]);
