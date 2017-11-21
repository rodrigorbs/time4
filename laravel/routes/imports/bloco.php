<?php

Route::get('/bloco', [
           'as'            => 'bloco',
	       'middleware'    => 'auth',
           'uses'          => 'BlocoController@index'
        ]);

Route::get('/bloco/create', [
           'as'            => 'bloco',
	       'middleware'    => 'auth',
           'uses'          => 'BlocoController@formulario'
        ]);

        Route::post('/bloco/create', [
                   'as'            => 'bloco',
        	       'middleware'    => 'auth',
                   'uses'          => 'BlocoController@store'
                ]);
