<?php
	
	namespace DejandoHuella\ClassCunstom;
	
	class classChargenMainSistemPrimary {
		private static $data = null;

		public static function createCategoPrograms(){
			return $data = [
				['cp_id_categoria' => 1,
				 'cp_wordkey_name' => 'wordkey_deporte_cp'],
				['cp_id_categoria' => 2,
				 'cp_wordkey_name' => 'wordkey_psicologia_cp'],
				['cp_id_categoria' => 3,
				 'cp_wordkey_name' => 'wordkey_danza_cp'],
				['cp_id_categoria' => 4,
				 'cp_wordkey_name' => 'wordkey_musica_cp'],
				['cp_id_categoria' => 5,
				 'cp_wordkey_name' => 'wordkey_cien_tecn_cp'],
				['cp_id_categoria' => 6,
				 'cp_wordkey_name' => 'wordkey_civica_cp'],
				['cp_id_categoria' => 7,
				 'cp_wordkey_name' => 'wordkey_eco_gestores_cp'], 
				['cp_id_categoria' => 8,
				 'cp_wordkey_name' => 'wordkey_foment_l_cp']     
			];
		}

		/*public static function createPrograms(){
			return $data = [
				[],
			];
		}*/

		public static function createSrcLibrary(){
			return $data = [
				[
				'srcapp_id' => 1,				
				'srcapp_dir' => 'css/main_css/main/',
				'srcapp_filename' => 'style-main.css',			
				'srcapp_fileformat' => 'css'],

				[
				'srcapp_id' => 2,				
				'srcapp_dir' => 'css/main_css/main/grid/',
				'srcapp_filename' => 'style-main-grid.css',				
				'srcapp_fileformat' => 'css'],

				[
				'srcapp_id' => 3,				
				'srcapp_dir' => 'css/main_css/main/controller/',
				'srcapp_filename' => 'style-controller.css',				
				'srcapp_fileformat' => 'css'],

				[
				'srcapp_id' => 4,				
				'srcapp_dir' => 'css/main_css/nav/',
				'srcapp_filename' => 'style-nav.css',				
				'srcapp_fileformat' => 'css'],

				[
				'srcapp_id' => 5,				
				'srcapp_dir' => 'css/main_css/effects/',
				'srcapp_filename' => 'style-effects.css',				
				'srcapp_fileformat' => 'css'],

				[
				'srcapp_id' => 6,				
				'srcapp_dir' => 'css/main_css/fonts/',
				'srcapp_filename' => 'style-fonts.css',				
				'srcapp_fileformat' => 'css'],

				[
				'srcapp_id' => 7,				
				'srcapp_dir' => 'css/main_css/scroll/',
				'srcapp_filename' => 'style-scroll.css',				
				'srcapp_fileformat' => 'css'],

				[
				'srcapp_id' => 8,				
				'srcapp_dir' => 'css/main_css/nav/',
				'srcapp_filename' => 'style-nav-hidde-show.css',				
				'srcapp_fileformat' => 'css'],

				[
				'srcapp_id' => 9,				
				'srcapp_dir' => 'css/main_css/animate/',
				'srcapp_filename' => 'style-animate.css',				
				'srcapp_fileformat' => 'css'],

				[
				'srcapp_id' => 10,				
				'srcapp_dir' => 'css/main_css/slider/',
				'srcapp_filename' => 'style-slider.css',				
				'srcapp_fileformat' => 'css'],

				[
				'srcapp_id' => 11,				
				'srcapp_dir' => 'css/main_css/main/tooltip/',
				'srcapp_filename' => 'style-tooltip.css',				
				'srcapp_fileformat' => 'css'],

				[
				'srcapp_id' => 12,			
				'srcapp_dir' => 'js/jsJQUERY/',
				'srcapp_filename' => 'jquery-3.2.1.min.js',				
				'srcapp_fileformat' => 'js'],

				[
				'srcapp_id' => 13,			
				'srcapp_dir' => 'js/jsJQUERY/',
				'srcapp_filename' => 'jquery-1.10.2.js',				
				'srcapp_fileformat' => 'js'],
				
				[
				'srcapp_id' => 14,				
				'srcapp_dir' => 'js/jsBootstrap/',
				'srcapp_filename' => 'bootstrap.min.js',				
				'srcapp_fileformat' => 'js'],

				[
				'srcapp_id' => 15,				
				'srcapp_dir' => 'js/jsBootstrap/',
				'srcapp_filename' => 'bootstrap.min.js',				
				'srcapp_fileformat' => 'js'],

				[
				'srcapp_id' => 16,				
				'srcapp_dir' => 'js/jsNav/',
				'srcapp_filename' =>'jsNav-script.js',
				'srcapp_fileformat' => 'js'],

				[
				'srcapp_id' => 17,				
	        	'srcapp_dir' => 'js/jsLogin/' ,
	        	'srcapp_filename' =>'jsLogin-script.js',  			
	        	'srcapp_fileformat' => 'js'],

	        	[
				'srcapp_id' => 18,				
				'srcapp_dir' => 'js/jsSlider/',
				'srcapp_filename' =>'jsSlider-script.js',				
				'srcapp_fileformat' => 'js'], 

				[
				'srcapp_id' => 19,				
				'srcapp_dir' => 'js/jsHtmlShiv5/',
				'srcapp_filename' =>'jsHtmlShiv5-script.js',				
				'srcapp_fileformat' => 'js'], 

				[
				'srcapp_id' => 20,				
				'srcapp_dir' => 'js/jsHtmlShiv5/',
				'srcapp_filename' =>'jsHtmlShiv5-printshiv-script.js',				
				'srcapp_fileformat' => 'js'], 

				[
				'srcapp_id' => 21,				
				'srcapp_dir' => 'js/jsSelectStyle/',
				'srcapp_filename' =>'jsSelectStyle-script.js',				
				'srcapp_fileformat' => 'js'], 

				[
				'srcapp_id' => 22,				
				'srcapp_dir' => 'js/jsSelectStyle/',
				'srcapp_filename' =>'jsSelectStyle-script.min.js',				
				'srcapp_fileformat' => 'js'],

				[
				'srcapp_id' => 23,				
				'srcapp_dir' => 'js/jsSearch/',
				'srcapp_filename' =>'jsSearch-script.js',				
				'srcapp_fileformat' => 'js'],

				[
				'srcapp_id' => 69,				
				'srcapp_dir' => 'js/jsSelectStyle/jsSelectStyleDocument/',
				'srcapp_filename' =>'jsSelectStyleEnv-script.js',				
				'srcapp_fileformat' => 'js'],

				[
				'srcapp_id' => 70,				
				'srcapp_dir' => 'js/jsAlertFunction/',
				'srcapp_filename' =>'jsAlertFunction-script.js',				
				'srcapp_fileformat' => 'js'],

				[
				'srcapp_id' => 71,				
				'srcapp_dir' => 'js/jsMainGui/',
				'srcapp_filename' =>'jsMainGui-script.js',				
				'srcapp_fileformat' => 'js']					
			];
		}

		public static function createSrcIcons(){
			return $data = [
				[
				'srcapp_id' => 24,				
				'srcapp_dir' => 'img/',
				'srcapp_filename' => 'logo.png',				
				'srcapp_fileformat' => 'png'],
				[
				'srcapp_id' => 25,				
				'srcapp_dir' => 'img/icon/nav/',
				'srcapp_filename' => 'about.png',				
				'srcapp_fileformat' => 'png'],
				[
				'srcapp_id' => 26,				
				'srcapp_dir' => 'img/icon/nav/',
				'srcapp_filename' => 'arrow-down.png',				
				'srcapp_fileformat' => 'png'],
				[
				'srcapp_id' => 27,				
				'srcapp_dir' => 'img/icon/nav/',
				'srcapp_filename' => 'audio.png',				
				'srcapp_fileformat' => 'png'],
				[
				'srcapp_id' => 28,				
				'srcapp_dir' => 'img/icon/nav/',
				'srcapp_filename' => 'agenda.png',				
				'srcapp_fileformat' => 'png'],
				[
				'srcapp_id' => 29,				
				'srcapp_dir' => 'img/icon/nav/',
				'srcapp_filename' => 'contact.png',				
				'srcapp_fileformat' => 'png'],
				[
				'srcapp_id' => 30,				
				'srcapp_dir' => 'img/icon/nav/',
				'srcapp_filename' => 'createAgenda.png',				
				'srcapp_fileformat' => 'png'],
				[
				'srcapp_id' => 31,				
				'srcapp_dir' => 'img/icon/nav/',
				'srcapp_filename' => 'createUsers.png',				
				'srcapp_fileformat' => 'png'],
				[
				'srcapp_id' => 32,				
				'srcapp_dir' => 'img/icon/nav/',
				'srcapp_filename' => 'createUsersSistem.png',				
				'srcapp_fileformat' => 'png'],
				[
				'srcapp_id' => 33,				
				'srcapp_dir' => 'img/icon/nav/',
				'srcapp_filename' => 'donation.png',				
				'srcapp_fileformat' => 'png'],
				[
				'srcapp_id' => 34,				
				'srcapp_dir' => 'img/icon/nav/',
				'srcapp_filename' => 'fundacionData.png',				
				'srcapp_fileformat' => 'png'],
				[
				'srcapp_id' => 35,				
				'srcapp_dir' => 'img/icon/nav/',
				'srcapp_filename' => 'gallery.png',				
				'srcapp_fileformat' => 'png'],
				[
				'srcapp_id' => 36,				
				'srcapp_dir' => 'img/icon/nav/',
				'srcapp_filename' => 'newtopics.png',				
				'srcapp_fileformat' => 'png'],
				[
				'srcapp_id' => 37,				
				'srcapp_dir' => 'img/icon/nav/',
				'srcapp_filename' => 'userAdd.png',				
				'srcapp_fileformat' => 'png'],
				[
				'srcapp_id' => 38,				
				'srcapp_dir' => 'img/icon/nav/',
				'srcapp_filename' => 'video.png',				
				'srcapp_fileformat' => 'png'],
				[
				'srcapp_id' => 39,				
				'srcapp_dir' => 'img/icon/header/',
				'srcapp_filename' => 'back.png',				
				'srcapp_fileformat' => 'png'],
				[
				'srcapp_id' => 40,				
				'srcapp_dir' => 'img/icon/header/',
				'srcapp_filename' => 'backHover.png',				
				'srcapp_fileformat' => 'png'],
				[
				'srcapp_id' => 41,				
				'srcapp_dir' => 'img/icon/header/',
				'srcapp_filename' => 'perfilMenu.png',				
				'srcapp_fileformat' => 'png'],
				[
				'srcapp_id' => 42,				
				'srcapp_dir' => 'img/icon/header/',
				'srcapp_filename' => 'perfilMenuHover.png',				
				'srcapp_fileformat' => 'png'],
				[
				'srcapp_id' => 43,				
				'srcapp_dir' => 'img/icon/header/',
				'srcapp_filename' => 'searchIcon.png',				
				'srcapp_fileformat' => 'png'],
				[
				'srcapp_id' => 44,				
				'srcapp_dir' => 'img/icon/header/',
				'srcapp_filename' => 'searchIconHover.png',				
				'srcapp_fileformat' => 'png'],
				[
				'srcapp_id' => 45,				
				'srcapp_dir' => 'img/icon/header/',
				'srcapp_filename' => 'userDefault.png',				
				'srcapp_fileformat' => 'png'],
				[
				'srcapp_id' => 46,				
				'srcapp_dir' => 'img/icon/form/',
				'srcapp_filename' => 'disable.png',				
				'srcapp_fileformat' => 'png'],
				[
				'srcapp_id' => 47,				
				'srcapp_dir' => 'img/icon/form/',
				'srcapp_filename' => 'disableHover.png',				
				'srcapp_fileformat' => 'png'],
				[
				'srcapp_id' => 48,				
				'srcapp_dir' => 'img/icon/form/',
				'srcapp_filename' => 'edit.png',				
				'srcapp_fileformat' => 'png'],
				[
				'srcapp_id' => 49,			
				'srcapp_dir' => 'img/icon/form/',
				'srcapp_filename' => 'editHover.png',				
				'srcapp_fileformat' => 'png'],
				[
				'srcapp_id' => 50,			
				'srcapp_dir' => 'img/icon/form/',
				'srcapp_filename' => 'more.png',				
				'srcapp_fileformat' => 'png'],
				[
				'srcapp_id' => 51,			
				'srcapp_dir' => 'img/icon/form/',
				'srcapp_filename' => 'moreHover.png',				
				'srcapp_fileformat' => 'png'],
				[
				'srcapp_id' => 52,			
				'srcapp_dir' => 'img/toolts/',
				'srcapp_filename' => 'arrowShowToolt.png',				
				'srcapp_fileformat' => 'png'],
				[
				'srcapp_id' => 53,			
				'srcapp_dir' => 'img/toolts/',
				'srcapp_filename' => 'arrowShowTooltHover.png',					
				'srcapp_fileformat' => 'png'],
				[
				'srcapp_id' => 54,				
				'srcapp_dir' => 'img/socialIcon/',
				'srcapp_filename' => 'facebook.png',				
				'srcapp_fileformat' => 'png'],
				[
				'srcapp_id' => 55,				
				'srcapp_dir' => 'img/socialIcon/',
				'srcapp_filename' => 'instagram.png',				
				'srcapp_fileformat' => 'png'],
				[
				'srcapp_id' => 56,				
				'srcapp_dir' => 'img/socialIcon/',
				'srcapp_filename' => 'twitter.png',				
				'srcapp_fileformat' => 'png'],
				[
				'srcapp_id' => 57,				
				'srcapp_dir' => 'img/imgTopics/header/',
				'srcapp_filename' => 'img1.jpg',				
				'srcapp_fileformat' => 'jpg'],
				[
				'srcapp_id' => 58,				
				'srcapp_dir' => 'img/imgTopics/header/',
				'srcapp_filename' => 'img2.jpg',			
				'srcapp_fileformat' => 'jpg'],
				[
				'srcapp_id' => 59,				
				'srcapp_dir' => 'img/imgTopics/header/',
				'srcapp_filename' => 'img3.jpg',				
				'srcapp_fileformat' => 'jpg'],
				[
				'srcapp_id' => 60,				
				'srcapp_dir' => 'img/imgTopics/header/',			
				'srcapp_filename' => 'img4.jpg',			
				'srcapp_fileformat' => 'jpg'],
				[
				'srcapp_id' => 61,				
				'srcapp_dir' => 'img/slider/',
				'srcapp_filename' => 'img-slider-1.jpg',		
				'srcapp_fileformat' => 'jpg'],
				[
				'srcapp_id' => 62,				
				'srcapp_dir' => 'img/slider/',
				'srcapp_filename' => 'img-slider-2.jpg',				
				'srcapp_fileformat' => 'jpg'],
				[
				'srcapp_id' => 63,				
				'srcapp_dir' => 'img/slider/',
				'srcapp_filename' => 'img-slider-3.jpg',				
				'srcapp_fileformat' => 'jpg'],
				[
				'srcapp_id' => 64,				
				'srcapp_dir' => 'img/slider/',
				'srcapp_filename' => 'img-slider-4.jpg',				
				'srcapp_fileformat' => 'jpg'],
				[
				'srcapp_id' => 65,				
				'srcapp_dir' => 'img/slider/',
				'srcapp_filename' => 'img-slider-5.jpg',				
				'srcapp_fileformat' => 'jpg'],
				[
				'srcapp_id' => 66,				
				'srcapp_dir' => 'img/slider/',
				'srcapp_filename' => 'img-slider-6.jpg',				
				'srcapp_fileformat' => 'jpg'],
				[
				'srcapp_id' => 67,				
				'srcapp_dir' => 'img/slider/',
				'srcapp_filename' => 'img-slider-7.jpg',				
				'srcapp_fileformat' => 'jpg'],
				[
				'srcapp_id' => 68,				
				'srcapp_dir' => 'img/icon/nav/',
				'srcapp_filename' => 'media.png',				
				'srcapp_fileformat' => 'png'],

				[
				'srcapp_id' => 72,				
				'srcapp_dir' => 'img/icon/nav/',
				'srcapp_filename' =>'openid-logo.png',				
				'srcapp_fileformat' => 'png'],

				[
				'srcapp_id' => 73,				
				'srcapp_dir' => 'img/icon/nav/',
				'srcapp_filename' =>'help.png',				
				'srcapp_fileformat' => 'png'],
				
				[
				'srcapp_id' => 74,				
				'srcapp_dir' => 'img/icon/nav/',
				'srcapp_filename' =>'administratorUsers.png',				
				'srcapp_fileformat' => 'png'],
				[
				'srcapp_id' => 75,				
				'srcapp_dir' => 'img/icon/nav/',
				'srcapp_filename' =>'administratorMulti.png',				
				'srcapp_fileformat' => 'png']

				];
		}

		public static function createLaguanges(){
			return $data = [
						['lg_id' => 1,
						 'lg_name_language' => 'Español (o castellano)',
						 'lg_wordkey_language' => 'es'],
						['lg_id' => 2,
						 'lg_name_language' => 'English',
						 'lg_wordkey_language' => 'en'] 
			];
		}

		public static function createGuiElements(){
			return $data = [
						['gtype_id' => 1,
						 'gtype_typename' => 'label'],
						['gtype_id' => 2,
						 'gtype_typename' => 'select'],
						['gtype_id' => 3,
						 'gtype_typename' => 'input[text]'],
						['gtype_id' => 4,
						 'gtype_typename' => 'input[password]'],
						['gtype_id' => 5,
						 'gtype_typename' => 'input[email]'],
						['gtype_id' => 6,
						 'gtype_typename' => 'input[number]'], 
						['gtype_id' => 7,
						 'gtype_typename' => 'input[checkbox]'],
						['gtype_id' => 8,
						 'gtype_typename' => 'input[radiobutton]'], 
						['gtype_id' => 9,
						 'gtype_typename' => 'input[submit]'],
						['gtype_id' => 10,
						 'gtype_typename' => 'button[button]'],
						['gtype_id' => 11,
						 'gtype_typename' => 'button[submit]'],
						['gtype_id' => 12,
						 'gtype_typename' => 'p'],
						['gtype_id' => 13,
						 'gtype_typename' => 'h1'],
						['gtype_id' => 14,
						 'gtype_typename' => 'h2'],
						['gtype_id' => 15,
						 'gtype_typename' => 'h3'], 
						['gtype_id' => 16,
						 'gtype_typename' => 'h4'],
						['gtype_id' => 17,
						 'gtype_typename' => 'h5'],
						['gtype_id' => 18,
						 'gtype_typename' => 'h6'],
						['gtype_id' => 19,
						 'gtype_typename' => 'a'],
						['gtype_id' => 20,
						 'gtype_typename' => 'textarea'],
						['gtype_id' => 21,
						 'gtype_typename' => 'input[reset]']   

			];
		}

		public static function createTextGui(){
			return $data = [
							['gtxt_id' => 1,
							 'gtxt_id_gtype' => 2,
							 'gtxt_id_language' => 1,
							 'gtxt_paramt_wordkey' => 'wordkey_fm',
							 'gtxt_text' => 'Femenino'],

							['gtxt_id' => 2,
							 'gtxt_id_gtype' => 2,
							 'gtxt_id_language' => 2,
							 'gtxt_paramt_wordkey' => 'wordkey_fm',
							 'gtxt_text' => 'Female'],

							['gtxt_id' => 3,
							 'gtxt_id_gtype' => 2,
							 'gtxt_id_language' => 1,
							 'gtxt_paramt_wordkey' => 'wordkey_mc',
							 'gtxt_text' => 'Masculino'],

							['gtxt_id' => 4,
							 'gtxt_id_gtype' => 2,
							 'gtxt_id_language' => 2,
							 'gtxt_paramt_wordkey' => 'wordkey_mc',
							 'gtxt_text' => 'Male'],

							['gtxt_id' => 5,
							 'gtxt_id_gtype' => 1,
							 'gtxt_id_language' => 1,
							 'gtxt_paramt_wordkey' => 'admin',
							 'gtxt_text' => 'Administrador'],

							['gtxt_id' => 6,
							 'gtxt_id_gtype' => 1,
							 'gtxt_id_language' => 2,
							 'gtxt_paramt_wordkey' => 'admin',
							 'gtxt_text' => 'Administrator'],

							['gtxt_id' => 7,
							 'gtxt_id_gtype' => 1,
							 'gtxt_id_language' => 1,
							 'gtxt_paramt_wordkey' => 'aux',
							 'gtxt_text' => 'Auxiliar'],

							['gtxt_id' => 8,
							 'gtxt_id_gtype' => 1,
							 'gtxt_id_language' => 2,
							 'gtxt_paramt_wordkey' => 'aux',
							 'gtxt_text' => 'Assistant'],

							['gtxt_id' => 9,
							 'gtxt_id_gtype' => 1,
							 'gtxt_id_language' => 1,
							 'gtxt_paramt_wordkey' => 'usn',
							 'gtxt_text' => 'Usuario normal'],

							['gtxt_id' => 10,
							 'gtxt_id_gtype' => 1,
							 'gtxt_id_language' => 2,
							 'gtxt_paramt_wordkey' => 'usn',
							 'gtxt_text' => 'Normal User'],

							['gtxt_id' => 11,
							 'gtxt_id_gtype' => 19,
							 'gtxt_id_language' => 1,
							 'gtxt_paramt_wordkey' => 'mdls_start',
							 'gtxt_text' => 'Inicio'],

							['gtxt_id' => 12,
							 'gtxt_id_gtype' => 19,
							 'gtxt_id_language' => 2,
							 'gtxt_paramt_wordkey' => 'mdls_start',
							 'gtxt_text' => 'Start'],

							['gtxt_id' => 13,
							 'gtxt_id_gtype' => 19,
							 'gtxt_id_language' => 1,
							 'gtxt_paramt_wordkey' => 'mdls_startAdmin',
							 'gtxt_text' => 'Inicio'],

							['gtxt_id' => 14,
							 'gtxt_id_gtype' => 19,
							 'gtxt_id_language' => 2,
							 'gtxt_paramt_wordkey' => 'mdls_startAdmin',
							 'gtxt_text' => 'Start'],

							['gtxt_id' => 15,
							 'gtxt_id_gtype' => 19,
							 'gtxt_id_language' => 1,
							 'gtxt_paramt_wordkey' => 'mdls_searchUser',
							 'gtxt_text' => 'Buscar Usuarios'],

							['gtxt_id' => 16,
							 'gtxt_id_gtype' => 19,
							 'gtxt_id_language' => 2,
							 'gtxt_paramt_wordkey' => 'mdls_searchUser',
							 'gtxt_text' => 'Search Users'],

							['gtxt_id' => 17,
							 'gtxt_id_gtype' => 19,
							 'gtxt_id_language' => 1,
							 'gtxt_paramt_wordkey' => 'mdls_searchAgenda',
							 'gtxt_text' => 'Buscar Agenda'],

							['gtxt_id' => 18,
							 'gtxt_id_gtype' => 19,
							 'gtxt_id_language' => 2,
							 'gtxt_paramt_wordkey' => 'mdls_searchAgenda',
							 'gtxt_text' => 'Search Diary Activities'],

							['gtxt_id' => 19,
							 'gtxt_id_gtype' => 19,
							 'gtxt_id_language' => 1,
							 'gtxt_paramt_wordkey' => 'mdls_createUserSistem',
							 'gtxt_text' => 'Crear Usuario del Sistema'],

							['gtxt_id' => 20,
							 'gtxt_id_gtype' => 19,
							 'gtxt_id_language' => 2,
							 'gtxt_paramt_wordkey' => 'mdls_createUserSistem',
							 'gtxt_text' => 'Create Users of Sistem'],

							['gtxt_id' => 21,
							 'gtxt_id_gtype' => 19,
							 'gtxt_id_language' => 1,
							 'gtxt_paramt_wordkey' => 'mdls_createUser',
							 'gtxt_text' => 'Crear Usuario'],

							['gtxt_id' => 22,
							 'gtxt_id_gtype' => 19,
							 'gtxt_id_language' => 2,
							 'gtxt_paramt_wordkey' => 'mdls_createUser',
							 'gtxt_text' => 'Create Users'],

							['gtxt_id' => 23,
							 'gtxt_id_gtype' => 19,
							 'gtxt_id_language' => 1,
							 'gtxt_paramt_wordkey' => 'mdls_createAgenda',
							 'gtxt_text' => 'Crear Agenda'],

							['gtxt_id' => 24,
							 'gtxt_id_gtype' => 19,
							 'gtxt_id_language' => 2,
							 'gtxt_paramt_wordkey' => 'mdls_createAgenda',
							 'gtxt_text' => 'Create Diary Activities'],

							['gtxt_id' => 25,
							 'gtxt_id_gtype' => 19,
							 'gtxt_id_language' => 1,
							 'gtxt_paramt_wordkey' => 'mdls_multi',
							 'gtxt_text' => 'Multimedia'],

							['gtxt_id' => 26,
							 'gtxt_id_gtype' => 19,
							 'gtxt_id_language' => 2,
							 'gtxt_paramt_wordkey' => 'mdls_multi',
							 'gtxt_text' => 'Multimedia'],

							['gtxt_id' => 27,
							 'gtxt_id_gtype' => 19,
							 'gtxt_id_language' => 1,
							 'gtxt_paramt_wordkey' => 'mdls_multi_video',
							 'gtxt_text' => 'Ver Vídeos'],

							['gtxt_id' => 28,
							 'gtxt_id_gtype' => 19,
							 'gtxt_id_language' => 2,
							 'gtxt_paramt_wordkey' => 'mdls_multi_video',
							 'gtxt_text' => 'Watch Video´s'],

							['gtxt_id' => 29,
							 'gtxt_id_gtype' => 19,
							 'gtxt_id_language' => 1,
							 'gtxt_paramt_wordkey' => 'mdls_multi_audio',
							 'gtxt_text' => 'Escuchar Audios'],

							['gtxt_id' => 30,
							 'gtxt_id_gtype' => 19,
							 'gtxt_id_language' => 2,
							 'gtxt_paramt_wordkey' => 'mdls_multi_audio',
							 'gtxt_text' => 'Listen Audio´s'],

							['gtxt_id' => 31,
							 'gtxt_id_gtype' => 19,
							 'gtxt_id_language' => 1,
							 'gtxt_paramt_wordkey' => 'mdls_multi_galeria',
							 'gtxt_text' => 'Ver Galerias'],

							['gtxt_id' => 32,
							 'gtxt_id_gtype' => 19,
							 'gtxt_id_language' => 2,
							 'gtxt_paramt_wordkey' => 'mdls_multi_galeria',
							 'gtxt_text' => 'Watch Gallery´s Art´s'],

							['gtxt_id' => 33,
							 'gtxt_id_gtype' => 19,
							 'gtxt_id_language' => 1,
							 'gtxt_paramt_wordkey' => 'mdls_newtopics',
							 'gtxt_text' => 'Novedades'],

							['gtxt_id' => 34,
							 'gtxt_id_gtype' => 19,
							 'gtxt_id_language' => 2,
							 'gtxt_paramt_wordkey' => 'mdls_newtopics',
							 'gtxt_text' => 'New topics'],

							['gtxt_id' => 35,
							 'gtxt_id_gtype' => 19,
							 'gtxt_id_language' => 1,
							 'gtxt_paramt_wordkey' => 'mdls_about_us',
							 'gtxt_text' => 'Quienes Somos'],

							['gtxt_id' => 36,
							 'gtxt_id_gtype' => 19,
							 'gtxt_id_language' => 2,
							 'gtxt_paramt_wordkey' => 'mdls_about_us',
							 'gtxt_text' => 'About us'],

							['gtxt_id' => 37,
							 'gtxt_id_gtype' => 19,
							 'gtxt_id_language' => 1,
							 'gtxt_paramt_wordkey' => 'mdls_contact',
							 'gtxt_text' => 'Contactenos'],

							['gtxt_id' => 38,
							 'gtxt_id_gtype' => 19,
							 'gtxt_id_language' => 2,
							 'gtxt_paramt_wordkey' => 'mdls_contact',
							 'gtxt_text' => 'Contact us'],

							['gtxt_id' => 39,
							 'gtxt_id_gtype' => 19,
							 'gtxt_id_language' => 1,
							 'gtxt_paramt_wordkey' => 'mdls_donation',
							 'gtxt_text' => 'Donativo'],

							['gtxt_id' => 40,
							 'gtxt_id_gtype' => 19,
							 'gtxt_id_language' => 2,
							 'gtxt_paramt_wordkey' => 'mdls_donation',
							 'gtxt_text' => 'Donative'],

							['gtxt_id' => 41,
							 'gtxt_id_gtype' => 1,
							 'gtxt_id_language' => 1,
							 'gtxt_paramt_wordkey' => 'wordkey_perfil_title',
							 'gtxt_text' => 'Perfil del Usuario'],

							['gtxt_id' => 42,
							 'gtxt_id_gtype' => 1,
							 'gtxt_id_language' => 2,
							 'gtxt_paramt_wordkey' => 'wordkey_perfil_title',
							 'gtxt_text' => 'User Perfil'],

							['gtxt_id' => 43,
							 'gtxt_id_gtype' => 1,
							 'gtxt_id_language' => 1,
							 'gtxt_paramt_wordkey' => 'wordkey_name_user',
							 'gtxt_text' => 'Nombres'],

							['gtxt_id' => 44,
							 'gtxt_id_gtype' => 1,
							 'gtxt_id_language' => 2,
							 'gtxt_paramt_wordkey' => 'wordkey_name_user',
							 'gtxt_text' => 'Name'],

							['gtxt_id' => 45,
							 'gtxt_id_gtype' => 1,
							 'gtxt_id_language' => 1,
							 'gtxt_paramt_wordkey' => 'wordkey_lastname_user',
							 'gtxt_text' => 'Apellidos'],

							['gtxt_id' => 46,
							 'gtxt_id_gtype' => 1,
							 'gtxt_id_language' => 2,
							 'gtxt_paramt_wordkey' => 'wordkey_lastname_user',
							 'gtxt_text' => 'Lastname'],

							['gtxt_id' => 47,
							 'gtxt_id_gtype' => 1,
							 'gtxt_id_language' => 1,
							 'gtxt_paramt_wordkey' => 'wordkey_address_user',
							 'gtxt_text' => 'Dirección'],

							['gtxt_id' => 48,
							 'gtxt_id_gtype' => 1,
							 'gtxt_id_language' => 2,
							 'gtxt_paramt_wordkey' => 'wordkey_address_user',
							 'gtxt_text' => 'Address'],

							['gtxt_id' => 49,
							 'gtxt_id_gtype' => 1,
							 'gtxt_id_language' => 1,
							 'gtxt_paramt_wordkey' => 'wordkey_gender_user',
							 'gtxt_text' => 'Genero'],

							['gtxt_id' => 50,
							 'gtxt_id_gtype' => 1,
							 'gtxt_id_language' => 2,
							 'gtxt_paramt_wordkey' => 'wordkey_gender_user',
							 'gtxt_text' => 'Gender'],

							['gtxt_id' => 51,
							 'gtxt_id_gtype' => 1,
							 'gtxt_id_language' => 1,
							 'gtxt_paramt_wordkey' => 'wordkey_email_user',
							 'gtxt_text' => 'Correo Electronico'],

							['gtxt_id' => 52,
							 'gtxt_id_gtype' => 1,
							 'gtxt_id_language' => 2,
							 'gtxt_paramt_wordkey' => 'wordkey_email_user',
							 'gtxt_text' => 'E-mail User'],

							['gtxt_id' => 53,
							 'gtxt_id_gtype' => 1,
							 'gtxt_id_language' => 1,
							 'gtxt_paramt_wordkey' => 'wordkey_Birthdate_user',
							 'gtxt_text' => 'Fecha de nacimiento'],

							['gtxt_id' => 54,
							 'gtxt_id_gtype' => 1,
							 'gtxt_id_language' => 2,
							 'gtxt_paramt_wordkey' => 'wordkey_Birthdate_user',
							 'gtxt_text' => 'Birthdate'],

							['gtxt_id' => 55,
							 'gtxt_id_gtype' => 1,
							 'gtxt_id_language' => 1,
							 'gtxt_paramt_wordkey' => 'wordkey_phone_user',
							 'gtxt_text' => 'Teléfono'],

							['gtxt_id' => 56,
							 'gtxt_id_gtype' => 1,
							 'gtxt_id_language' => 2,
							 'gtxt_paramt_wordkey' => 'wordkey_phone_user',
							 'gtxt_text' => 'Phone'],

							['gtxt_id' => 57,
							 'gtxt_id_gtype' => 1,
							 'gtxt_id_language' => 1,
							 'gtxt_paramt_wordkey' => 'wordkey_cellphone_user',
							 'gtxt_text' => 'Celular'],

							['gtxt_id' => 58,
							 'gtxt_id_gtype' => 1,
							 'gtxt_id_language' => 2,
							 'gtxt_paramt_wordkey' => 'wordkey_cellphone_user',
							 'gtxt_text' => 'Cell Phone'],

							['gtxt_id' => 59,
							 'gtxt_id_gtype' => 1,
							 'gtxt_id_language' => 1,
							 'gtxt_paramt_wordkey' => 'wordkey_age_user',
							 'gtxt_text' => 'Edad'],

							['gtxt_id' => 60,
							 'gtxt_id_gtype' => 1,
							 'gtxt_id_language' => 2,
							 'gtxt_paramt_wordkey' => 'wordkey_age_user',
							 'gtxt_text' => 'Age'],

							['gtxt_id' => 61,
							 'gtxt_id_gtype' => 1,
							 'gtxt_id_language' => 1,
							 'gtxt_paramt_wordkey' => 'wordkey_status_user',
							 'gtxt_text' => 'Estado del Usuario'],

							['gtxt_id' => 62,
							 'gtxt_id_gtype' => 1,
							 'gtxt_id_language' => 2,
							 'gtxt_paramt_wordkey' => 'wordkey_status_user',
							 'gtxt_text' => 'User Status'],

							['gtxt_id' => 63,
							 'gtxt_id_gtype' => 1,
							 'gtxt_id_language' => 1,
							 'gtxt_paramt_wordkey' => 'wordkey_status_active_user',
							 'gtxt_text' => 'Activo'],

							['gtxt_id' => 64,
							 'gtxt_id_gtype' => 1,
							 'gtxt_id_language' => 2,
							 'gtxt_paramt_wordkey' => 'wordkey_status_active_user',
							 'gtxt_text' => 'Active'],

							['gtxt_id' => 65,
							 'gtxt_id_gtype' => 1,
							 'gtxt_id_language' => 1,
							 'gtxt_paramt_wordkey' => 'wordkey_status_desable_user',
							 'gtxt_text' => 'Deshabilitado'],

							['gtxt_id' => 66,
							 'gtxt_id_gtype' => 1,
							 'gtxt_id_language' => 2,
							 'gtxt_paramt_wordkey' => 'wordkey_status_desable_user',
							 'gtxt_text' => 'Inactive'],

							['gtxt_id' => 67,
							 'gtxt_id_gtype' => 1,
							 'gtxt_id_language' => 1,
							 'gtxt_paramt_wordkey' => 'wordkey_gender_fm_user',
							 'gtxt_text' => 'Femenino'],

							['gtxt_id' => 68,
							 'gtxt_id_gtype' => 1,
							 'gtxt_id_language' => 2,
							 'gtxt_paramt_wordkey' => 'wordkey_gender_fm_user',
							 'gtxt_text' => 'Female'],

							['gtxt_id' => 69,
							 'gtxt_id_gtype' => 1,
							 'gtxt_id_language' => 1,
							 'gtxt_paramt_wordkey' => 'wordkey_gender_mc_user',
							 'gtxt_text' => 'Masculino'],

							['gtxt_id' => 70,
							 'gtxt_id_gtype' => 1,
							 'gtxt_id_language' => 2,
							 'gtxt_paramt_wordkey' => 'wordkey_gender_mc_user',
							 'gtxt_text' => 'Male'],							

							['gtxt_id' => 71,
							 'gtxt_id_gtype' => 1,
							 'gtxt_id_language' => 1,
							 'gtxt_paramt_wordkey' => 'wordkey_date_begin_user',
							 'gtxt_text' => 'Fecha de Inicio'],

							['gtxt_id' => 72,
							 'gtxt_id_gtype' => 1,
							 'gtxt_id_language' => 2,
							 'gtxt_paramt_wordkey' => 'wordkey_date_begin_user',
							 'gtxt_text' => 'Date Begin'],

							['gtxt_id' => 73,
							 'gtxt_id_gtype' => 1,
							 'gtxt_id_language' => 1,
							 'gtxt_paramt_wordkey' => 'wordkey_date_finishes_user',
							 'gtxt_text' => 'Fecha de Finalización'],

							['gtxt_id' => 74,
							 'gtxt_id_gtype' => 1,
							 'gtxt_id_language' => 2,
							 'gtxt_paramt_wordkey' => 'wordkey_date_finishes_user',
							 'gtxt_text' => 'Date Finishes'
							],
							['gtxt_id' => 75,
							 'gtxt_id_gtype' => 1,
							 'gtxt_id_language' => 1,
							 'gtxt_paramt_wordkey' => 'wordkey_country_user',
							 'gtxt_text' => 'País'],

							['gtxt_id' => 76,
							 'gtxt_id_gtype' => 1,
							 'gtxt_id_language' => 2,
							 'gtxt_paramt_wordkey' => 'wordkey_country_user',
							 'gtxt_text' => 'Country'],

							['gtxt_id' => 77,
							 'gtxt_id_gtype' => 1,
							 'gtxt_id_language' => 1,
							 'gtxt_paramt_wordkey' => 'wordkey_region_user',
							 'gtxt_text' => 'Región'],

							['gtxt_id' => 78,
							 'gtxt_id_gtype' => 1,
							 'gtxt_id_language' => 2,
							 'gtxt_paramt_wordkey' => 'wordkey_region_user',
							 'gtxt_text' => 'Region'],

							['gtxt_id' => 79,
							 'gtxt_id_gtype' => 1,
							 'gtxt_id_language' => 1,
							 'gtxt_paramt_wordkey' => 'wordkey_municipality_user',
							 'gtxt_text' => 'Municipio'],

							['gtxt_id' => 80,
							 'gtxt_id_gtype' => 1,
							 'gtxt_id_language' => 2,
							 'gtxt_paramt_wordkey' => 'wordkey_municipality_user',
							 'gtxt_text' => 'Municipality or City'],

							['gtxt_id' => 81,
							 'gtxt_id_gtype' => 1,
							 'gtxt_id_language' => 1,
							 'gtxt_paramt_wordkey' => 'wordkey_municipalities_user',
							 'gtxt_text' => 'Municipios o Ciudades'],

							['gtxt_id' => 82,
							 'gtxt_id_gtype' => 1,
							 'gtxt_id_language' => 2,
							 'gtxt_paramt_wordkey' => 'wordkey_municipalities_user',
							 'gtxt_text' => 'Municipalities or city´s'],

							['gtxt_id' => 83,
							 'gtxt_id_gtype' => 1,
							 'gtxt_id_language' => 1,
							 'gtxt_paramt_wordkey' => 'wordkey_type_beneficiario_user',
							 'gtxt_text' => 'Beneficiario'],

							['gtxt_id' => 84,
							 'gtxt_id_gtype' => 1,
							 'gtxt_id_language' => 2,
							 'gtxt_paramt_wordkey' => 'wordkey_type_beneficiario_user',
							 'gtxt_text' => 'Beneficiary'],

							['gtxt_id' => 85,
							 'gtxt_id_gtype' => 1,
							 'gtxt_id_language' => 1,
							 'gtxt_paramt_wordkey' => 'wordkey_type_teacher_user',
							 'gtxt_text' => 'Profesor'],

							['gtxt_id' => 86,
							 'gtxt_id_gtype' => 1,
							 'gtxt_id_language' => 2,
							 'gtxt_paramt_wordkey' => 'wordkey_type_teacher_user',
							 'gtxt_text' => 'Teacher'],

							['gtxt_id' => 87,
							 'gtxt_id_gtype' => 1,
							 'gtxt_id_language' => 1,
							 'gtxt_paramt_wordkey' => 'wordkey_type_voluntario_user',
							 'gtxt_text' => 'Voluntario'],

							['gtxt_id' => 88,
							 'gtxt_id_gtype' => 1,
							 'gtxt_id_language' => 2,
							 'gtxt_paramt_wordkey' => 'wordkey_type_voluntario_user',
							 'gtxt_text' => 'Voluntary'],

							['gtxt_id' => 89,
							 'gtxt_id_gtype' => 1,
							 'gtxt_id_language' => 1,
							 'gtxt_paramt_wordkey' => 'wordkey_type_padre_fm_user',
							 'gtxt_text' => 'Madre'],

							['gtxt_id' => 90,
							 'gtxt_id_gtype' => 1,
							 'gtxt_id_language' => 2,
							 'gtxt_paramt_wordkey' => 'wordkey_type_padre_fm_user',
							 'gtxt_text' => 'Mother'],

							['gtxt_id' => 91,
							 'gtxt_id_gtype' => 1,
							 'gtxt_id_language' => 1,
							 'gtxt_paramt_wordkey' => 'wordkey_type_padre_mc_user',
							 'gtxt_text' => 'Padre'],

							['gtxt_id' => 92,
							 'gtxt_id_gtype' => 1,
							 'gtxt_id_language' => 2,
							 'gtxt_paramt_wordkey' => 'wordkey_type_padre_mc_user',
							 'gtxt_text' => 'Parent'],

							['gtxt_id' => 93,
							 'gtxt_id_gtype' => 1,
							 'gtxt_id_language' => 1,
							 'gtxt_paramt_wordkey' => 'wordkey_cargo_user',
							 'gtxt_text' => 'Cargo'],

							['gtxt_id' => 94,
							 'gtxt_id_gtype' => 1,
							 'gtxt_id_language' => 2,
							 'gtxt_paramt_wordkey' => 'wordkey_cargo_user',
							 'gtxt_text' => 'Position'],

							['gtxt_id' => 95,
							 'gtxt_id_gtype' => 1,
							 'gtxt_id_language' => 1,
							 'gtxt_paramt_wordkey' => 'wordkey_empleo_entidad',
							 'gtxt_text' => 'Nombre de la Entidad'],

							['gtxt_id' => 96,
							 'gtxt_id_gtype' => 1,
							 'gtxt_id_language' => 2,
							 'gtxt_paramt_wordkey' => 'wordkey_empleo_entidad',
							 'gtxt_text' => 'Entity name'],

							['gtxt_id' => 97,
							 'gtxt_id_gtype' => 1,
							 'gtxt_id_language' => 1,
							 'gtxt_paramt_wordkey' => 'wordkey_empleo_address_entidad',
							 'gtxt_text' => 'Dirección de la Entidad'],

							['gtxt_id' => 98,
							 'gtxt_id_gtype' => 1,
							 'gtxt_id_language' => 2,
							 'gtxt_paramt_wordkey' => 'wordkey_empleo_address_entidad',
							 'gtxt_text' => 'Entity Address'],

							['gtxt_id' => 99,
							 'gtxt_id_gtype' => 1,
							 'gtxt_id_language' => 1,
							 'gtxt_paramt_wordkey' => 'wordkey_infoextra_skill',
							 'gtxt_text' => 'Conocimientos'],

							['gtxt_id' => 100,
							 'gtxt_id_gtype' => 1,
							 'gtxt_id_language' => 2,
							 'gtxt_paramt_wordkey' => 'wordkey_infoextra_skill',
							 'gtxt_text' => 'Knowledge'],

							['gtxt_id' => 101,
							 'gtxt_id_gtype' => 1,
							 'gtxt_id_language' => 1,
							 'gtxt_paramt_wordkey' => 'wordkey_infoextra_skill_dominio_r',
							 'gtxt_text' => 'Regular'],

							['gtxt_id' => 102,
							 'gtxt_id_gtype' => 1,
							 'gtxt_id_language' => 2,
							 'gtxt_paramt_wordkey' => 'wordkey_infoextra_skill_dominio_r',
							 'gtxt_text' => 'Regulary'],

							['gtxt_id' => 103,
							 'gtxt_id_gtype' => 1,
							 'gtxt_id_language' => 1,
							 'gtxt_paramt_wordkey' => 'wordkey_infoextra_skill_dominio_b',
							 'gtxt_text' => 'Bien'],

							['gtxt_id' => 104,
							 'gtxt_id_gtype' => 1,
							 'gtxt_id_language' => 2,
							 'gtxt_paramt_wordkey' => 'wordkey_infoextra_skill_dominio_b',
							 'gtxt_text' => 'Good'],

							['gtxt_id' => 105,
							 'gtxt_id_gtype' => 1,
							 'gtxt_id_language' => 1,
							 'gtxt_paramt_wordkey' => 'wordkey_infoextra_skill_dominio_mb',
							 'gtxt_text' => 'Muy Bien'],

							['gtxt_id' => 106,
							 'gtxt_id_gtype' => 1,
							 'gtxt_id_language' => 2,
							 'gtxt_paramt_wordkey' => 'wordkey_infoextra_skill_dominio_mb',
							 'gtxt_text' => 'Very Good'],

							['gtxt_id' => 107,
							 'gtxt_id_gtype' => 1,
							 'gtxt_id_language' => 1,
							 'gtxt_paramt_wordkey' => 'wordkey_title_hv',
							 'gtxt_text' => 'Hoja de vida'],

							['gtxt_id' => 108,
							 'gtxt_id_gtype' => 1,
							 'gtxt_id_language' => 2,
							 'gtxt_paramt_wordkey' => 'wordkey_title_hv',
							 'gtxt_text' => 'Curriculum Vitae'],

							['gtxt_id' => 109,
							 'gtxt_id_gtype' => 1,
							 'gtxt_id_language' => 1,
							 'gtxt_paramt_wordkey' => 'pr_wordkey_sister',
							 'gtxt_text' => 'Hermana'],

							['gtxt_id' => 110,
							 'gtxt_id_gtype' => 1,
							 'gtxt_id_language' => 2,
							 'gtxt_paramt_wordkey' => 'pr_wordkey_sister',
							 'gtxt_text' => 'Sister'],

							['gtxt_id' => 111,
							 'gtxt_id_gtype' => 1,
							 'gtxt_id_language' => 1,
							 'gtxt_paramt_wordkey' => 'pr_wordkey_brother',
							 'gtxt_text' => 'Hermano'],

							['gtxt_id' => 112,
							 'gtxt_id_gtype' => 1,
							 'gtxt_id_language' => 2,
							 'gtxt_paramt_wordkey' => 'pr_wordkey_brother',
							 'gtxt_text' => 'Brother'],

							['gtxt_id' => 113,
							 'gtxt_id_gtype' => 1,
							 'gtxt_id_language' => 1,
							 'gtxt_paramt_wordkey' => 'pr_wordkey_mom',
							 'gtxt_text' => 'Mamá'],

							['gtxt_id' => 114,
							 'gtxt_id_gtype' => 1,
							 'gtxt_id_language' => 2,
							 'gtxt_paramt_wordkey' => 'pr_wordkey_mom',
							 'gtxt_text' => 'Mom'],

							['gtxt_id' => 115,
							 'gtxt_id_gtype' => 1,
							 'gtxt_id_language' => 1,
							 'gtxt_paramt_wordkey' => 'pr_wordkey_dad',
							 'gtxt_text' => 'Papá'],

							['gtxt_id' => 116,
							 'gtxt_id_gtype' => 1,
							 'gtxt_id_language' => 2,
							 'gtxt_paramt_wordkey' => 'pr_wordkey_dad',
							 'gtxt_text' => 'Dad'],

							['gtxt_id' => 117,
							 'gtxt_id_gtype' => 1,
							 'gtxt_id_language' => 1,
							 'gtxt_paramt_wordkey' => 'pr_wordkey_aunt',
							 'gtxt_text' => 'Tía'],

							['gtxt_id' => 118,
							 'gtxt_id_gtype' => 1,
							 'gtxt_id_language' => 2,
							 'gtxt_paramt_wordkey' => 'pr_wordkey_aunt',
							 'gtxt_text' => 'Aunt'],

							['gtxt_id' => 119,
							 'gtxt_id_gtype' => 1,
							 'gtxt_id_language' => 1,
							 'gtxt_paramt_wordkey' => 'pr_wordkey_uncle',
							 'gtxt_text' => 'Tío'],

							['gtxt_id' => 120,
							 'gtxt_id_gtype' => 1,
							 'gtxt_id_language' => 2,
							 'gtxt_paramt_wordkey' => 'pr_wordkey_uncle',
							 'gtxt_text' => 'Uncle'],

							['gtxt_id' => 121,
							 'gtxt_id_gtype' => 1,
							 'gtxt_id_language' => 1,
							 'gtxt_paramt_wordkey' => 'pr_wordkey_Grandmother',
							 'gtxt_text' => 'Abuela'],

							['gtxt_id' => 122,
							 'gtxt_id_gtype' => 1,
							 'gtxt_id_language' => 2,
							 'gtxt_paramt_wordkey' => 'pr_wordkey_Grandmother',
							 'gtxt_text' => 'Grandmother'],

							['gtxt_id' => 123,
							 'gtxt_id_gtype' => 1,
							 'gtxt_id_language' => 1,
							 'gtxt_paramt_wordkey' => 'pr_wordkey_Grandfather',
							 'gtxt_text' => 'Abuelo'],

							['gtxt_id' => 124,
							 'gtxt_id_gtype' => 1,
							 'gtxt_id_language' => 2,
							 'gtxt_paramt_wordkey' => 'pr_wordkey_Grandfather',
							 'gtxt_text' => 'Grandfather'],

							['gtxt_id' => 125,
							 'gtxt_id_gtype' => 1,
							 'gtxt_id_language' => 1,
							 'gtxt_paramt_wordkey' => 'pr_wordkey_Cousin_she',
							 'gtxt_text' => 'Prima'],

							['gtxt_id' => 126,
							 'gtxt_id_gtype' => 1,
							 'gtxt_id_language' => 2,
							 'gtxt_paramt_wordkey' => 'pr_wordkey_Cousin_she',
							 'gtxt_text' => 'She Cousin'],

							['gtxt_id' => 127,
							 'gtxt_id_gtype' => 1,
							 'gtxt_id_language' => 1,
							 'gtxt_paramt_wordkey' => 'pr_wordkey_Cousin_he',
							 'gtxt_text' => 'Primo'],

							['gtxt_id' => 128,
							 'gtxt_id_gtype' => 1,
							 'gtxt_id_language' => 2,
							 'gtxt_paramt_wordkey' => 'pr_wordkey_Cousin_he',
							 'gtxt_text' => 'He Cousin'],

							['gtxt_id' => 129,
							 'gtxt_id_gtype' =>1,
							 'gtxt_id_language' =>1,
							 'gtxt_paramt_wordkey' =>'wordkey_welcome', 
							 'gtxt_text' =>'Bienvenido'],

							['gtxt_id' => 130,
							 'gtxt_id_gtype' =>1,
							 'gtxt_id_language' =>2,
							 'gtxt_paramt_wordkey' =>'wordkey_welcome', 
							 'gtxt_text' =>'Welcome'],  

							['gtxt_id' => 131,
							 'gtxt_id_gtype' =>13,
							 'gtxt_id_language' =>1,
							 'gtxt_paramt_wordkey' =>'wordkey_resguser', 
							 'gtxt_text' =>'Registro de usuarios'],

							['gtxt_id' => 132,
							 'gtxt_id_gtype' =>13,
							 'gtxt_id_language' =>2,
							 'gtxt_paramt_wordkey' =>'wordkey_resguser', 
							 'gtxt_text' =>'Sign Up Users'], 

							['gtxt_id' => 133,
							 'gtxt_id_gtype' =>2,
							 'gtxt_id_language' =>1,
							 'gtxt_paramt_wordkey' =>'wordkey_cedulaciudadania', 
							 'gtxt_text' =>'Cedula de Ciudadanía'],

							['gtxt_id' => 134,
							 'gtxt_id_gtype' =>2,
							 'gtxt_id_language' =>2,
							 'gtxt_paramt_wordkey' =>'wordkey_cedulaciudadania', 
							 'gtxt_text' =>'Citizenship Card'],

							['gtxt_id' => 135,
							 'gtxt_id_gtype' =>2,
							 'gtxt_id_language' =>1,
							 'gtxt_paramt_wordkey' =>'wordkey_tarjetaextranjeria', 
							 'gtxt_text' =>'Tarjeta de Extranjería'],

							['gtxt_id' => 136,
							 'gtxt_id_gtype' =>2,
							 'gtxt_id_language' =>2,
							 'gtxt_paramt_wordkey' =>'wordkey_tarjetaextranjeria', 
							 'gtxt_text' =>'Foreigner Card'],

							['gtxt_id' => 137,
							 'gtxt_id_gtype' =>2,
							 'gtxt_id_language' =>1,
							 'gtxt_paramt_wordkey' =>'wordkey_tarjetaidentidad', 
							 'gtxt_text' =>'Tarjeta de Identidad'],

							['gtxt_id' => 138,
							 'gtxt_id_gtype' =>2,
							 'gtxt_id_language' =>2,
							 'gtxt_paramt_wordkey' =>'wordkey_tarjetaidentidad', 
							 'gtxt_text' =>'Identity Card'],

							['gtxt_id' => 139,
							 'gtxt_id_gtype' =>2,
							 'gtxt_id_language' =>1,
							 'gtxt_paramt_wordkey' =>'wordkey_tarjetapasaporte', 
							 'gtxt_text' =>'Tarjeta de Pasaporte'],

							['gtxt_id' => 140,
							 'gtxt_id_gtype' =>2,
							 'gtxt_id_language' =>2,
							 'gtxt_paramt_wordkey' =>'wordkey_tarjetapasaporte', 
							 'gtxt_text' =>'Passport Card'],

							['gtxt_id' => 141,
							 'gtxt_id_gtype' =>1,
							 'gtxt_id_language' =>1,
							 'gtxt_paramt_wordkey' =>'wordkey_type_document', 
							 'gtxt_text' =>'Tipo de documento'],

							['gtxt_id' => 142,
							 'gtxt_id_gtype' =>1,
							 'gtxt_id_language' =>2,
							 'gtxt_paramt_wordkey' =>'wordkey_type_document', 
							 'gtxt_text' =>'Type document'],

							['gtxt_id' => 143,
							 'gtxt_id_gtype' =>1,
							 'gtxt_id_language' =>1,
							 'gtxt_paramt_wordkey' =>'wordkey_document', 
							 'gtxt_text' =>'Numero de documento'],

							['gtxt_id' => 144,
							 'gtxt_id_gtype' =>1,
							 'gtxt_id_language' =>2,
							 'gtxt_paramt_wordkey' =>'wordkey_document', 
							 'gtxt_text' =>'Number of document'],

							['gtxt_id' => 145,
							 'gtxt_id_gtype' =>1,
							 'gtxt_id_language' =>1,
							 'gtxt_paramt_wordkey' =>'wordkey_password_user', 
							 'gtxt_text' =>'Contraseña'],

							['gtxt_id' => 146,
							 'gtxt_id_gtype' =>1,
							 'gtxt_id_language' =>2,
							 'gtxt_paramt_wordkey' =>'wordkey_password_user', 
							 'gtxt_text' =>'Password'],

							['gtxt_id' => 147,
							 'gtxt_id_gtype' =>1,
							 'gtxt_id_language' =>1,
							 'gtxt_paramt_wordkey' =>'wordkey_roll_user', 
							 'gtxt_text' =>'Cargo'],
							 
							['gtxt_id' => 148,
							 'gtxt_id_gtype' =>1,
							 'gtxt_id_language' =>2,
							 'gtxt_paramt_wordkey' =>'wordkey_roll_user', 
							 'gtxt_text' =>'Roll'], 

							 ['gtxt_id' => 149,
							 'gtxt_id_gtype' =>1,
							 'gtxt_id_language' =>1,
							 'gtxt_paramt_wordkey' =>'wordkey_assistan',
							 'gtxt_text' =>'Asistente del sistema'],

							 ['gtxt_id' => 150,
							 'gtxt_id_gtype' =>1,
							 'gtxt_id_language' =>2,
							 'gtxt_paramt_wordkey' =>'wordkey_assistan',
							 'gtxt_text' =>'System Assistan'],

							 ['gtxt_id' => 151,
							 'gtxt_id_gtype' =>2,
							 'gtxt_id_language' =>1,
							 'gtxt_paramt_wordkey' =>'wordkey_assistan',
							 'gtxt_text' =>'Asistente del sistema'],

							 ['gtxt_id' => 152,
							 'gtxt_id_gtype' =>2,
							 'gtxt_id_language' =>2,
							 'gtxt_paramt_wordkey' =>'wordkey_assistan',
							 'gtxt_text' =>'System Assistan'],

							 ['gtxt_id' => 153,
							 'gtxt_id_gtype' =>1,
							 'gtxt_id_language' =>1,
							 'gtxt_paramt_wordkey' =>'wordkey_beneficier',
							 'gtxt_text' =>'Beneficiario'],

							 ['gtxt_id' => 154,
							 'gtxt_id_gtype' =>1,
							 'gtxt_id_language' =>2,
							 'gtxt_paramt_wordkey' =>'wordkey_beneficier',
							 'gtxt_text' =>'Beneficier'],

							 ['gtxt_id' => 155,
							 'gtxt_id_gtype' =>2,
							 'gtxt_id_language' =>1,
							 'gtxt_paramt_wordkey' =>'wordkey_beneficier',
							 'gtxt_text' =>'Beneficiario'],

							 ['gtxt_id' => 156,
							 'gtxt_id_gtype' =>2,
							 'gtxt_id_language' =>2,
							 'gtxt_paramt_wordkey' =>'wordkey_beneficier',
							 'gtxt_text' =>'Beneficier'],

							 ['gtxt_id' => 157,
							 'gtxt_id_gtype' =>1,
							 'gtxt_id_language' =>1,
							 'gtxt_paramt_wordkey' =>'wordkey_profesor',
							 'gtxt_text' =>'Profesor'],

							 ['gtxt_id' => 158,
							 'gtxt_id_gtype' =>1,
							 'gtxt_id_language' =>2,
							 'gtxt_paramt_wordkey' =>'wordkey_profesor',
							 'gtxt_text' =>'Teacher'],

							 ['gtxt_id' => 159,
							 'gtxt_id_gtype' =>2,
							 'gtxt_id_language' =>1,
							 'gtxt_paramt_wordkey' =>'wordkey_profesor',
							 'gtxt_text' =>'Profesor'],

							 ['gtxt_id' => 160,
							 'gtxt_id_gtype' =>2,
							 'gtxt_id_language' =>2,
							 'gtxt_paramt_wordkey' =>'wordkey_profesor',
							 'gtxt_text' =>'Teacher'],

							 ['gtxt_id' => 161,
							 'gtxt_id_gtype' =>1,
							 'gtxt_id_language' =>1,
							 'gtxt_paramt_wordkey' =>'wordkey_padre',
							 'gtxt_text' =>'Padre o Madre'],

							 ['gtxt_id' => 162,
							 'gtxt_id_gtype' =>1,
							 'gtxt_id_language' =>2,
							 'gtxt_paramt_wordkey' =>'wordkey_padre',
							 'gtxt_text' =>'Mother or Parent'],

							 ['gtxt_id' => 163,
							 'gtxt_id_gtype' =>2,
							 'gtxt_id_language' =>1,
							 'gtxt_paramt_wordkey' =>'wordkey_padre',
							 'gtxt_text' =>'Padre o Madre'],

							 ['gtxt_id' => 164,
							 'gtxt_id_gtype' =>2,
							 'gtxt_id_language' =>2,
							 'gtxt_paramt_wordkey' =>'wordkey_padre',
							 'gtxt_text' =>'Mother or Parent'],

							 ['gtxt_id' => 165,
							 'gtxt_id_gtype' =>1,
							 'gtxt_id_language' =>1,
							 'gtxt_paramt_wordkey' =>'wordkey_voluntario',
							 'gtxt_text' =>'Voluntario'],

							 ['gtxt_id' => 166,
							 'gtxt_id_gtype' =>1,
							 'gtxt_id_language' =>2,
							 'gtxt_paramt_wordkey' =>'wordkey_voluntario',
							 'gtxt_text' =>'Voluntary'],

							 ['gtxt_id' => 167,
							 'gtxt_id_gtype' =>2,
							 'gtxt_id_language' =>1,
							 'gtxt_paramt_wordkey' =>'wordkey_voluntario',
							 'gtxt_text' =>'Voluntario'],

							 ['gtxt_id' => 168,
							 'gtxt_id_gtype' =>2,
							 'gtxt_id_language' =>2,
							 'gtxt_paramt_wordkey' =>'wordkey_voluntario',
							 'gtxt_text' =>'Voluntary'],

							 ['gtxt_id' => 169,
							 'gtxt_id_gtype' =>1,
							 'gtxt_id_language' =>1,
							 'gtxt_paramt_wordkey' =>'wordkey_type_user',
							 'gtxt_text' =>'Tipo de Usuario'],

							 ['gtxt_id' => 170,
							 'gtxt_id_gtype' =>1,
							 'gtxt_id_language' =>2,
							 'gtxt_paramt_wordkey' =>'wordkey_type_user',
							 'gtxt_text' =>'Type Users'],

							 ['gtxt_id' => 171,
							 'gtxt_id_gtype' =>1,
							 'gtxt_id_language' =>1,
							 'gtxt_paramt_wordkey' =>'wordkey_name_institute',
							 'gtxt_text' =>'Nombre de la institucion o sede edu.'],

							 ['gtxt_id' => 172,
							 'gtxt_id_gtype' =>1,
							 'gtxt_id_language' =>2,
							 'gtxt_paramt_wordkey' =>'wordkey_name_institute',
							 'gtxt_text' =>'Name of institute or sede'],

							 ['gtxt_id' => 173,
							 'gtxt_id_gtype' =>1,
							 'gtxt_id_language' =>1,
							 'gtxt_paramt_wordkey' =>'wordkey_address_institute',
							 'gtxt_text' =>'Dirección del instituto o sede edu.'],

							 ['gtxt_id' => 174,
							 'gtxt_id_gtype' =>1,
							 'gtxt_id_language' =>2,
							 'gtxt_paramt_wordkey' =>'wordkey_address_institute',
							 'gtxt_text' =>'Addres of institute or sede'],

							 ['gtxt_id' => 175,
							 'gtxt_id_gtype' =>1,
							 'gtxt_id_language' =>1,
							 'gtxt_paramt_wordkey' =>'wordkey_phone_institute',
							 'gtxt_text' =>'Telefono del instituto o sede edu.'],

							 ['gtxt_id' => 176,
							 'gtxt_id_gtype' =>1,
							 'gtxt_id_language' =>2,
							 'gtxt_paramt_wordkey' =>'wordkey_phone_institute',
							 'gtxt_text' =>'Phone of institute or sede'],							 

							 ['gtxt_id' => 177,
							 'gtxt_id_gtype' =>1,
							 'gtxt_id_language' =>1,
							 'gtxt_paramt_wordkey' =>'wordkey_email_institute',
							 'gtxt_text' =>'Correo Electronico del instituto o sede edu.'],

							 ['gtxt_id' => 178,
							 'gtxt_id_gtype' =>1,
							 'gtxt_id_language' =>2,
							 'gtxt_paramt_wordkey' =>'wordkey_email_institute',
							 'gtxt_text' =>'Email of institute or sede'],

							 ['gtxt_id' => 179,
							 'gtxt_id_gtype' =>1,
							 'gtxt_id_language' =>1,
							 'gtxt_paramt_wordkey' =>'wordkey_id_institute',
							 'gtxt_text' =>'Nit del instituto o sede edu.'],

							 ['gtxt_id' => 180,
							 'gtxt_id_gtype' =>1,
							 'gtxt_id_language' =>2,
							 'gtxt_paramt_wordkey' =>'wordkey_id_institute',
							 'gtxt_text' =>'Nit of institute or sede'],

							 ['gtxt_id' => 181,
							 'gtxt_id_gtype' =>2,
							 'gtxt_id_language' =>1,
							 'gtxt_paramt_wordkey' =>'wordkey_deporte_cp',
							 'gtxt_text' =>'Deporte'],

							 ['gtxt_id' => 182,
							 'gtxt_id_gtype' =>2,
							 'gtxt_id_language' =>2,
							 'gtxt_paramt_wordkey' =>'wordkey_deporte_cp',
							 'gtxt_text' =>'Sport'],

							 ['gtxt_id' => 183,
							 'gtxt_id_gtype' =>2,
							 'gtxt_id_language' =>1,
							 'gtxt_paramt_wordkey' =>'wordkey_psicologia_cp',
							 'gtxt_text' =>'Psicologia'],

							 ['gtxt_id' => 184,
							 'gtxt_id_gtype' =>2,
							 'gtxt_id_language' =>2,
							 'gtxt_paramt_wordkey' =>'wordkey_psicologia_cp',
							 'gtxt_text' =>'Psychology'],
								
							 ['gtxt_id' => 185,
							 'gtxt_id_gtype' =>2,
							 'gtxt_id_language' =>1,
							 'gtxt_paramt_wordkey' =>'wordkey_danza_cp',
							 'gtxt_text' =>'Danza'],

							 ['gtxt_id' => 186,
							 'gtxt_id_gtype' =>2,
							 'gtxt_id_language' =>2,
							 'gtxt_paramt_wordkey' =>'wordkey_danza_cp',
							 'gtxt_text' =>'Dance'],	

							 ['gtxt_id' => 187,
							 'gtxt_id_gtype' =>2,
							 'gtxt_id_language' =>1,
							 'gtxt_paramt_wordkey' =>'wordkey_musica_cp',
							 'gtxt_text' =>'Música'],

							 ['gtxt_id' => 188,
							 'gtxt_id_gtype' =>2,
							 'gtxt_id_language' =>2,
							 'gtxt_paramt_wordkey' =>'wordkey_musica_cp',
							 'gtxt_text' =>'Music'], 

							 ['gtxt_id' => 189,
							 'gtxt_id_gtype' =>2,
							 'gtxt_id_language' =>1,
							 'gtxt_paramt_wordkey' =>'wordkey_cien_tecn_cp',
							 'gtxt_text' =>'Ciencias y Tecnologias'],

							 ['gtxt_id' => 190,
							 'gtxt_id_gtype' =>2,
							 'gtxt_id_language' =>2,
							 'gtxt_paramt_wordkey' =>'wordkey_cien_tecn_cp',
							 'gtxt_text' =>'Science and Technology'],

							 ['gtxt_id' => 191,
							 'gtxt_id_gtype' =>2,
							 'gtxt_id_language' =>1,
							 'gtxt_paramt_wordkey' =>'wordkey_civica_cp',
							 'gtxt_text' =>'Cívica'],

							 ['gtxt_id' => 192,
							 'gtxt_id_gtype' =>2,
							 'gtxt_id_language' =>2,
							 'gtxt_paramt_wordkey' =>'wordkey_civica_cp',
							 'gtxt_text' =>'Civic'], 

							 ['gtxt_id' => 193,
							 'gtxt_id_gtype' =>2,
							 'gtxt_id_language' =>1,
							 'gtxt_paramt_wordkey' =>'wordkey_eco_gestores_cp',
							 'gtxt_text' =>'Eco Gestores'],

							 ['gtxt_id' => 194,
							 'gtxt_id_gtype' =>2,
							 'gtxt_id_language' =>2,
							 'gtxt_paramt_wordkey' =>'wordkey_eco_gestores_cp',
							 'gtxt_text' =>'Eco Managers'],

							 ['gtxt_id' => 195,
							 'gtxt_id_gtype' =>2,
							 'gtxt_id_language' =>1,
							 'gtxt_paramt_wordkey' =>'wordkey_foment_l_cp',
							 'gtxt_text' =>'Fomento Ludico'],

							 ['gtxt_id' => 196,
							 'gtxt_id_gtype' =>2,
							 'gtxt_id_language' =>2,
							 'gtxt_paramt_wordkey' =>'wordkey_foment_l_cp',
							 'gtxt_text' =>'Recreational promotion'],

							 ['gtxt_id' => 197,
							 'gtxt_id_gtype' =>1,
							 'gtxt_id_language' =>1,
							 'gtxt_paramt_wordkey' =>'wordkey_categoria_programs',
							 'gtxt_text' =>'Categoria del Programa'],

							 ['gtxt_id' => 198,
							 'gtxt_id_gtype' =>1,
							 'gtxt_id_language' =>2,
							 'gtxt_paramt_wordkey' =>'wordkey_categoria_programs',
							 'gtxt_text' =>'Program Category'],

							 ['gtxt_id' => 199,
							 'gtxt_id_gtype' =>1,
							 'gtxt_id_language' =>1,
							 'gtxt_paramt_wordkey' =>'wordkey_study_grade',
							 'gtxt_text' =>'Grado de estudio'],

							 ['gtxt_id' => 200,
							 'gtxt_id_gtype' =>1,
							 'gtxt_id_language' =>2,
							 'gtxt_paramt_wordkey' =>'wordkey_study_grade',
							 'gtxt_text' =>'Study grade'],

							 ['gtxt_id' => 201,
							 'gtxt_id_gtype' =>1,
							 'gtxt_id_language' =>1,
							 'gtxt_paramt_wordkey' =>'wordkey_less_job',
							 'gtxt_text' =>'Menor trabajando'],

							 ['gtxt_id' => 202,
							 'gtxt_id_gtype' =>1,
							 'gtxt_id_language' =>2,
							 'gtxt_paramt_wordkey' =>'wordkey_less_job',
							 'gtxt_text' =>'Less job'],

							 ['gtxt_id' => 203,
							 'gtxt_id_gtype' =>1,
							 'gtxt_id_language' =>1,
							 'gtxt_paramt_wordkey' =>'wordkey_working_day',
							 'gtxt_text' =>'Jornada'],

							 ['gtxt_id' => 204,
							 'gtxt_id_gtype' =>1,
							 'gtxt_id_language' =>2,
							 'gtxt_paramt_wordkey' =>'wordkey_working_day',
							 'gtxt_text' =>'Working day'],

							 ['gtxt_id' => 205,
							 'gtxt_id_gtype' =>1,
							 'gtxt_id_language' =>1,
							 'gtxt_paramt_wordkey' =>'wordkey_acudiente',
							 'gtxt_text' =>'Acudiente'],

							 ['gtxt_id' => 206,
							 'gtxt_id_gtype' =>1,
							 'gtxt_id_language' =>2,
							 'gtxt_paramt_wordkey' =>'wordkey_acudiente',
							 'gtxt_text' =>'Acudiente'],

							 ['gtxt_id' => 207,
							 'gtxt_id_gtype' =>8,
							 'gtxt_id_language' =>1,
							 'gtxt_paramt_wordkey' =>'wordkey_yea_check',
							 'gtxt_text' =>'Si'],

							 ['gtxt_id' => 208,
							 'gtxt_id_gtype' =>8,
							 'gtxt_id_language' =>2,
							 'gtxt_paramt_wordkey' =>'wordkey_yea_check',
							 'gtxt_text' =>'Yea'],

							 ['gtxt_id' => 209,
							 'gtxt_id_gtype' =>8,
							 'gtxt_id_language' =>1,
							 'gtxt_paramt_wordkey' =>'wordkey_not_check',
							 'gtxt_text' =>'No'],

							 ['gtxt_id' => 210,
							 'gtxt_id_gtype' =>8,
							 'gtxt_id_language' =>2,
							 'gtxt_paramt_wordkey' =>'wordkey_not_check',
							 'gtxt_text' =>'Not'],
							   	
							   	
							   
							
			];	
		}

		public static function createModuls(){
			return $data = [

					['mdls_id' => 1,
					 'mdls_url' => '/',
					 'mdls_patch' => 'index',
					 'mdls_wordkey_modul_name' => 'mdls_start',
					 'mdls_paramt_name' => 'index'],

					['mdls_id' => 2,
					 'mdls_url' => '/Admin',
					 'mdls_patch' => 'modulos.functionAdministration.index',
					 'mdls_wordkey_modul_name' => 'mdls_startAdmin',
					 'mdls_paramt_name' => 'Admin'], 

					['mdls_id' => 3,
					 'mdls_url' => '/Admin/buscar-usuario',
					 'mdls_patch' => 'modulos.functionAdministration.searchUsers.index',
					 'mdls_wordkey_modul_name' => 'mdls_searchUser',
					 'mdls_paramt_name' => 'buscar-usuario'], 

					['mdls_id' => 4,
					 'mdls_url' => '/Admin/buscar-agenda',
					 'mdls_patch' => 'modulos.functionAdministration.searchAgenda.index',
					 'mdls_wordkey_modul_name' => 'mdls_searchAgenda',
					 'mdls_paramt_name' => 'buscar-agenda'], 

					['mdls_id' => 5,
					 'mdls_url' => '/Admin/crear/usuario-sistema',
					 'mdls_patch' => 'modulos.functionAdministration.createUserSistem.index',
					 'mdls_wordkey_modul_name' => 'mdls_createUserSistem',
					 'mdls_paramt_name' => 'usuario-sistema'],  

					['mdls_id' => 6,
					 'mdls_url' => '/Admin/crear/usuario',
					 'mdls_patch' => 'modulos.functionAdministration.createUser.index',
					 'mdls_wordkey_modul_name' => 'mdls_createUser',
					 'mdls_paramt_name' => 'usuario'],

					['mdls_id' => 7,
					 'mdls_url' => '/Admin/crear/agenda',
					 'mdls_patch' => 'modulos.functionAdministration.createAgenda.index',
					 'mdls_wordkey_modul_name' => 'mdls_createAgenda',
					 'mdls_paramt_name' => 'agenda'],

					['mdls_id' => 8,
					 'mdls_url' => '/Multimedia',
					 'mdls_patch' => 'modulos.functionMultimedia.index',
					 'mdls_wordkey_modul_name' => 'mdls_multi',
					 'mdls_paramt_name' => 'multimedia'], 

					['mdls_id' => 9,
					 'mdls_url' => '/Multimedia/Videos',
					 'mdls_patch' => 'modulos.functionMultimedia.watchFunction.index',
					 'mdls_wordkey_modul_name' => 'mdls_multi_video',
					 'mdls_paramt_name' => 'ver-videos'],  

					['mdls_id' => 10,
					 'mdls_url' => '/Multimedia/Audios',
					 'mdls_patch' => 'modulos.functionMultimedia.audioFunction.index',
					 'mdls_wordkey_modul_name' => 'mdls_multi_audio',
					 'mdls_paramt_name' => 'escuchar-audio'],  

					['mdls_id' => 11,
					 'mdls_url' => '/Multimedia/Galeria',
					 'mdls_patch' => 'modulos.functionMultimedia.galleryFunction.index',
					 'mdls_wordkey_modul_name' => 'mdls_multi_galeria',
					 'mdls_paramt_name' => 'ver-galeria'],   

					['mdls_id' => 12,
					 'mdls_url' => '#noticias',
					 'mdls_patch' => null,
					 'mdls_wordkey_modul_name' => 'mdls_newtopics',
					 'mdls_paramt_name' => null], 

					['mdls_id' => 13,
					 'mdls_url' => '#quienessomos',
					 'mdls_patch' => null,
					 'mdls_wordkey_modul_name' => 'mdls_about_us',
					 'mdls_paramt_name' => null],  

					['mdls_id' => 14,
					 'mdls_url' => '#contactenos',
					 'mdls_patch' => null,
					 'mdls_wordkey_modul_name' => 'mdls_contact',
					 'mdls_paramt_name' => null],

					['mdls_id' => 15,
					 'mdls_url' => '#Donacion',
					 'mdls_patch' => null,
					 'mdls_wordkey_modul_name' => 'mdls_donation',
					 'mdls_paramt_name' => null],

					['mdls_id' => 16,
					 'mdls_url' => '/Admin/buscar-multimedia',
					 'mdls_patch' => 'modulos.functionAdministration.searchMultimedia.index',
					 'mdls_wordkey_modul_name' => 'mdls_search_multimedia',
					 'mdls_paramt_name' => 'buscar-multimedia'],

					['mdls_id' => 17,
					 'mdls_url' => '/Admin/subir/multimedia',
					 'mdls_patch' => 'modulos.functionAdministration.uploadMultimedia.index',
					 'mdls_wordkey_modul_name' => 'mdls_upload_multimedia',
					 'mdls_paramt_name' => 'subir-multimedia'],

					 ['mdls_id' => 18,
					 'mdls_url' => '/Admin/manuals',
					 'mdls_patch' => 'modulos.functionAdministration.manuals.index',
					 'mdls_wordkey_modul_name' => 'mdls_manuals_users',
					 'mdls_paramt_name' => 'manuals']      

					  

			];
		}

		public static function createRolls(){
			return $data = [
				['rl_id' => 1,'rl_wordkey_name' => 'Admin'],
				['rl_id' => 2,'rl_wordkey_name' => 'Aux'],
				['rl_id' => 3,'rl_wordkey_name' => 'Usn']
			];
		}	

		public static function createTypeUsers(){
			return $data = [
				['tus_id' => 1, 'tus_wordkey_name' => 'wordkey_assistan'],
				['tus_id' => 2, 'tus_wordkey_name' => 'wordkey_beneficier'],
				['tus_id' => 3, 'tus_wordkey_name' => 'wordkey_profesor'],
				['tus_id' => 4, 'tus_wordkey_name' => 'wordkey_padre'],
				['tus_id' => 5, 'tus_wordkey_name' => 'wordkey_voluntario']
			];
		}	

		public static function createGeneros(){
			return $data = [
				['g_id_genero' => 1 ,'g_wordkey_genero' => 'wordkey_fm'], 
       			['g_id_genero' => 2 ,'g_wordkey_genero' => 'wordkey_mc']
			];
		}	

		public static function createUserAdminDataPersonal(){
			return $data = [
				[
					'dp_id' => 1144164149,
					'dp_td_id' => 1,
					'dp_nombre' => 'Daniel Leonardo',
					'dp_apellido' => 'Arevalo Padilla',
					'dp_fe_nacimiento' => '1992-11-27',
					'dp_edad' => '24',
					'dp_telefono' => '3050821',
					'dp_direccion' => 'cll 84 #1A5 c bis - 56',
					'dp_id_roll' => 1, 
					'dp_id_estp' => 1144164149,
					'dp_id_genero' => 2,
					'dp_id_type_user' => 1 
				],
				[
					'dp_id' => 16940133,
					'dp_td_id' => 1,
					'dp_nombre' => 'Javier',
					'dp_apellido' => 'Perez',
					'dp_fe_nacimiento' => '1981-11-27',
					'dp_edad' => '24',
					'dp_telefono' => '3050821',
					'dp_direccion' => 'cll 84 #1A5 c bis - 56',
					'dp_id_roll' => 1, 
					'dp_id_estp' => 16940133,
					'dp_id_genero' => 2,
					'dp_id_type_user' => 1 
				],
				[
					'dp_id' => 1151954263,
					'dp_td_id' => 1,
					'dp_nombre' => 'Esteban',
					'dp_apellido' => 'Cardona',
					'dp_fe_nacimiento' => '1994-06-14',
					'dp_edad' => '23',
					'dp_telefono' => '3127726799',
					'dp_direccion' => 'Av 5 Oeste # 22-20',
					'dp_id_roll' => 1, 
					'dp_id_estp' => 1151954263,
					'dp_id_genero' => 2,
					'dp_id_type_user' => 1 
				],
				[
					'dp_id' => 1107095631,
					'dp_td_id' => 1,
					'dp_nombre' => 'Sebastian',
					'dp_apellido' => 'Bocanegra',
					'dp_fe_nacimiento' => '1996-02-11',
					'dp_edad' => '21',
					'dp_telefono' => '3158349763',
					'dp_direccion' => 'cll falsa #123',
					'dp_id_roll' => 1, 
					'dp_id_estp' => 1107095631,
					'dp_id_genero' => 2,
					'dp_id_type_user' => 1 
				]
			];
		}

		public static function createUserAdminStatus(){
			return $data = [
				[
					'estp_id' => 1144164149,
					'estp_activeordesable' => 1 
				],
				[
					'estp_id' => 16940133,
					'estp_activeordesable' => 1 
				],
				[
					'estp_id' => 1151954263,
					'estp_activeordesable' => 1 
				],
				[
					'estp_id' => 1107095631,
					'estp_activeordesable' => 1 
				]
			];
		}

		public static function createUserAdminLogin(){
			return $data = [
				[
					'us_id_datospersonales' => 1144164149,
					'us_id_roll' => 1,
					'us_id_permiso' => 1144164149,
					'us_email' => 'kiminordther@gmail.com',
					'us_password' => bcrypt('dlap1144164149')
				],
				[
					'us_id_datospersonales' => 16940133,
					'us_id_roll' => 1,
					'us_id_permiso' => 16940133,
					'us_email' => 'javierp@misena.edu.co',
					'us_password' => bcrypt('123456')
				],
				[
					'us_id_datospersonales' => 1151954263,
					'us_id_roll' => 1,
					'us_id_permiso' => 1151954263,
					'us_email' => 'ecardona362@misena.edu.co',
					'us_password' => bcrypt('123456')
				],
				[
					'us_id_datospersonales' => 1107095631,
					'us_id_roll' => 1,
					'us_id_permiso' => 1107095631,
					'us_email' => '1365@misena.edu.co',
					'us_password' => bcrypt('123456')
				]
			];
		}

		public static function createUserAdminPermi(){
			return $data = [
				[
					'pm_id' =>  1144164149,
					'pm_create' => 1,
					'pm_ready' => 1,
					'pm_update' => 1,
					'pm_delete' => 1
				],
				[
					'pm_id' =>  16940133,
					'pm_create' => 1,
					'pm_ready' => 1,
					'pm_update' => 1,
					'pm_delete' => 1
				],
				[
					'pm_id' =>  1151954263,
					'pm_create' => 1,
					'pm_ready' => 1,
					'pm_update' => 1,
					'pm_delete' => 1
				],
				[
					'pm_id' =>  1107095631,
					'pm_create' => 1,
					'pm_ready' => 1,
					'pm_update' => 1,
					'pm_delete' => 1
				]
			];
		}

		public static function createUserAdminAssistan(){
			return $data = [
				['asst_id' => 1144164149],
				['asst_id' => 16940133],
				['asst_id' => 1151954263],
				['asst_id' => 1107095631]
			];
		}

		public static function createTypeDocument(){
			return $data = [
				['td_id' => 1, 'td_wordkey_name' => 'wordkey_cedulaciudadania'],
				['td_id' => 2, 'td_wordkey_name' => 'wordkey_tarjetaextranjeria'],
				['td_id' => 3, 'td_wordkey_name' => 'wordkey_tarjetaidentidad'],
				['td_id' => 4, 'td_wordkey_name' => 'wordkey_tarjetapasaporte']
			];
		}
	}