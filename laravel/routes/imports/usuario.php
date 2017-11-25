<?php

Route::get('/usuario', [
           'as'            => 'usuario',
	       'middleware'    => 'auth',
           'uses'          => 'UsuarioController@index'
        ]);
