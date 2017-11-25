<?php

Route::get('/consultarGrade', [
           'as'            => 'consultarGrade',
	       'middleware'    => 'auth',
           'uses'          => 'ConsultarGradeController@index'
        ]);
