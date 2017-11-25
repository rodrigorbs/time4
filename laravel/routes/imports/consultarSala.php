<?php

Route::get('/consultarSala', [
           'as'            => 'consultarSala',
	       'middleware'    => 'auth',
           'uses'          => 'ConsultarSalaController@index'
        ]);
