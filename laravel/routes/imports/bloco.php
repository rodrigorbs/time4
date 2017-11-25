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

Route::post('/bloco/salvar', 'BlocoController@salvar');
Route::get('/bloco/{id}/editar', 'BlocoController@editar');
Route::get('/bloco/{id}/remover', 'BlocoController@remover');
