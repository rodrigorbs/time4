<?php

Route::get('/bloco', [
           'as'            => 'bloco',
	       'middleware'    => 'auth',
           'uses'          => 'BlocoController@index'
        ]);

Route::get('/bloco/formulario', [
           'as'            => 'bloco',
	       'middleware'    => 'auth',
           'uses'          => 'BlocoController@formulario'
        ]);
