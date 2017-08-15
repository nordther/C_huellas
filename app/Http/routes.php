<?php	

	Route::get('/Admin',['uses' => 'adminController@index']);	
	Route::get('/Admin/perfil/{id}',['uses' => 'adminController@perfil']);
	Route::get('/Admin/{idView}',['uses' => 'adminController@createViewDinamyn']);
	Route::get('/Admin/crear/{idView}',['uses' => 'adminController@createViewDinamyn']);
	Route::get('/Admin/subir/{idView}',['uses' => 'adminController@createViewDinamyn']);
	Route::post('/Admin/cambioPerfil/',['uses' => 'adminController@cambiosPerfiles']);

	
	

	Route::get('/',['uses' => 'mainController@index']);
	Route::get('/Multimedia',['uses' => 'multimediaController@index']);
	Route::get('/Multimedia/Videos',['uses' => 'multimediaController@watch']);
	Route::get('/Multimedia/Audios',['uses' => 'multimediaController@audio']);
	Route::get('/Multimedia/Galeria',['uses' => 'multimediaController@gallery']);
	
	Route::resource("/login","loginController");
	Route::get("/logout","loginController@logout");



	Route::get('error', function(){ 
	    abort(500);
	});

	


	