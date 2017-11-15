<?php

Route::get('/grade', [
           'as'            => 'grade',
	       'middleware'    => 'auth',
           'uses'          => 'GradeController@index'
        ]);

Route::get('/grade/formulario', [
           'as'            => 'grade',
	       'middleware'    => 'auth',
           'uses'          => 'GradeController@formulario'
        ]);
