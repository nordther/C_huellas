Entidad [srcapps]

$table->increments('id');
$table->integer('srcapp_id')->index()->unique();
$table->string('srcapp_url',200)->nullable();
$table->string('srcapp_dir',200);
$table->string('srcapp_filename',150);
$table->integer('srcapp_filesize')->nullable();
$table->string('srcapp_filesizetype',100)->nullable();
$table->string('srcapp_fileformat',100);
$table->timestamps();

Entidad [mediasrc]

$table->increments('id');
$table->integer('mdsrc_id')->index()->unique();
$table->string('mdsrc_url',200);            
$table->string('mdsrc_filename',150)->nullable();
$table->integer('mdsrc_filesize')->nullable();
$table->string('mdsrc_filesizetype',100)->nullable();
$table->string('mdsrc_fileformat',100)->nullable();
$table->timestamps();

Entidad [language]

$table->increments('id');
$table->integer('lg_id')->index()->unique();
$table->string('lg_name_language',200);
$table->string('lg_wordkey_language',50);
$table->timestamps();

Entidad [contentext]

$table->increments('id');
$table->integer('ctxt_id')->index()->unique();
$table->string('ctxt_title',200);
$table->string('ctxt_text',500);
$table->integer('ctxt_id_language')->index();
$table->timestamps();

$table->foreign('ctxt_id_language')
      ->references('lg_id')
      ->on('languages')
      ->onDelete('cascade')
      ->onUpdate('cascade');

Entidad [guitype]

$table->increments('id');
$table->integer('gtype_id')->index()->unique();
$table->string('gtype_typename',200);
$table->timestamps();

Entidad [guitext]

$table->increments('id');
$table->integer('gtxt_id')->index()->unique();
$table->integer('gtxt_id_gtype')->index();
$table->integer('gtxt_id_language')->index();
$table->string('gtxt_paramt_wordkey',120);
$table->string('gtxt_text',375);
$table->timestamps();

$table->foreign('gtxt_id_gtype')
      ->references('gtype_id')
      ->on('guitypes')
      ->onDelete('cascade')
      ->onUpdate('cascade');

$table->foreign('gtxt_id_language')
      ->references('lg_id')
      ->on('languages')
      ->onDelete('cascade')
      ->onUpdate('cascade');

Entidad [moduls]

$table->increments('id');
$table->integer('mdls_id')->index()->unique();
$table->string('mdls_url',200);
$table->string('mdls_patch',200)->nullable();            
$table->string('mdls_wordkey_modul_name',120)->nullable();
$table->string('mdls_paramt_name',120)->nullable();
$table->timestamps();

Entidad [submoduls]

$table->increments('id');
$table->integer('smdls_id')->index()->unique();
$table->integer('smdls_id_mdls')->index();
$table->string('smdls_url',200);
$table->string('smdls_patch',200);            
$table->string('smdls_wordkey_modul_name',120);            
$table->timestamps();

$table->foreign('smdls_id_mdls')
      ->references('mdls_id')
      ->on('moduls')
      ->onDelete('cascade')
      ->onUpdate('cascade');

Entidad [modultable]

$table->increments('id');
$table->integer('mdt_id')->index()->unique();
$table->string('mdt_name_table',250);
$table->timestamps();

Entidad [modulatribute]

$table->increments('id');
$table->integer('mda_id')->inde()->unique();
$table->integer('mda_id_table')->inde();
$table->string('mda_type_atribute',255);
$table->string('mda_name_atribute',255);
$table->timestamps();

$table->foreign('mda_id_table')
      ->references('mdt_id')
      ->on('modultables')
      ->onDelete('cascade')
      ->onUpdate('cascade');


Entidad [rolls]

$table->increments('id');
$table->integer('rl_id')->index()->unique();            
$table->string('rl_wordkey_name',120);
$table->timestamps();



Entidad [permisos]

$table->increments('id');
$table->integer('pm_id')->index()->unique();
$table->boolean('pm_create');
$table->boolean('pm_ready');
$table->boolean('pm_update');
$table->boolean('pm_delete');
$table->timestamps();

Entidad [categoriaprograma]

$table->increments('id');
$table->integer('cp_id_categoria')->index()->unique();
$table->string('cp_wordkey_name',120);
$table->timestamps();

Entidad [programas]

$table->increments('id');
$table->integer('p_id_programa')->index()->unique();
$table->integer('p_id_catego_programa')->index();
$table->string('p_wordkey_name',120)->index();
$table->timestamps();

$table->foreign('p_id_catego_programa')
	  ->references('cp_id_categoria')
	  ->on('categoriaprogramas')
	  ->onDelete('cascade')
	  ->onUpdate('cascade');



Entidad [parentesco]

$table->increments('id');
$table->integer('pr_id_parentesco')->index()->unique();
$table->string('pr_wordkey_parentesco',120);
$table->timestamps();

Entidad [generos]

$table->increments('id');
$table->integer('g_id_genero')->index()->unique();
$table->string('g_wordkey_genero',120);
$table->timestamps();


Entidad [paises]

$table->increments('id');
$table->integer('ps_id_pais')->index()->unique();
$table->string('ps_pais',200);
$table->timestamps();

Entidad [regiones]

$table->increments('id');
$table->integer('rg_id_region')->index()->unique();
$table->string('rg_region',200);
$table->integer('rg_id_pais')->index();
$table->timestamps();

$table->foreign('rg_id_pais')
      ->references('ps_id_pais')
      ->on('paises')
      ->onDelete('cascade')
      ->onUpdate('cascade');

Entidad [zonas]

$table->increments('id');
$table->integer('zn_id')->index()->unique();
$table->string('zn_name',200);
$table->integer('zn_id_region')->index();

$table->foreign('zn_id_region')
      ->references('rg_id_region')
      ->on('regiones')
      ->onDelete('cascade')
      ->onUpdate('cascade');


Entidad [typestatus]

$table->increments('id');
$table->integer('ts_id_typestatus')->index()->unique();
$table->integer('ts_id_zona')->index() ;
$table->string('ts_status_name',200); <- etado, provincia, departamento, condado 

$table->foreign('ts_id_zona')
      ->references('zn_id')
      ->on('zonas')
      ->onDelete('cascade')
      ->onUpdate('cascade'); 

Entidad [typemunicipio]

$table->increments('id');
$table->integer('tmn_id')->index()->unique();
$table->string('tmn_name_type',200);
$table->timestamps(); <- pueblo, corregimiento, ciudad           

Entidad [municipios]

$table->increments('id');
$table->integer('mn_id_municipio')->index()->unique();
$table->string('mn_municipio',200);
$table->integer('mn_id_zona')->index(); 
$table->integer('mn_id_tmn')->index();
$table->boolean('mn_capital');             
$table->timestamps();

$table->foreign('mn_id_zona')
      ->references('zn_id')
      ->on('zonas')
      ->onDelete('cascade')
      ->onUpdate('cascade');

$table->foreign('mn_id_tmn')
      ->references('tmn_id')
      ->on('typemunicipios')
      ->onDelete('cascade')
      ->onUpdate('cascade');      

Entidad [situacionactuals]

$table->increments('id');
$table->integer('sa_id')->index()->unique();
$table->string('sa_wordkey_categoria',120);
$table->timestamps();

Entidad [estadopersonas]

$table->increments('id');
$table->integer('estp_id')->index()->unique();
$table->boolean('estp_activeordesable');
$table->timestamps();

Entidad [typedocuments]

$table->increments('id');
$table->integer('td_id')->index()->unique();
$table->string('td_wordkey_name',120);
$table->timestamps();

Entidad [typeusers]

$table->increments('id');
$table->integer('tus_id')->index()->unique();
$table->string('tus_wordkey_name',120);
$table->timestamps();

Entidad [datospersonales]

$table->increments('id');
$table->integer('dp_id')->index()->unique();
$table->string('dp_nombre',200);
$table->string('dp_apellido',200);
$table->date('dp_fe_nacimiento');
$table->string('dp_edad',20);
$table->string('dp_telefono',20);
$table->string('dp_celular',20);
$table->string('dp_direccion',300);
$table->integer('dp_td_id')->index();
$table->integer('dp_id_roll')->index();
$table->integer('dp_id_estp')->index()->unique();
$table->integer('dp_id_sa')->index()->nullable();
$table->integer('dp_id_genero')->index()->nullable();
$table->integer('dp_id_parentesco')->index()->unique()->nullable();
$table->integer('dp_id_municipio')->index()->unique()->nullable();
$table->integer('dp_id_type_user')->index()->unique();
$table->timestamps();

$table->foreign('dp_td_id')
      ->references('td_id')
      ->on('typedocuments')
      ->onDelete('cascade')
      ->onUpdate('cascade');

$table->foreign('dp_id_roll')
      ->references('rl_id')
      ->on('rolls')
      ->onDelete('cascade')
      ->onUpdate('cascade');

$table->foreign('dp_id_estp')
      ->references('estp_id')
      ->on('estadopersonas')
      ->onDelete('cascade')
      ->onUpdate('cascade');

$table->foreign('dp_id_sa')
      ->references('sa_id')
      ->on('situacionactuals')
      ->onDelete('cascade')
      ->onUpdate('cascade');

$table->foreign('dp_id_genero')
      ->references('g_id_genero')
      ->on('generos')
      ->onDelete('cascade')
      ->onUpdate('cascade');

$table->foreign('dp_id_parentesco')
      ->references('pr_id_parentesco')
      ->on('parentescos')
      ->onDelete('cascade')
      ->onUpdate('cascade');      

$table->foreign('dp_id_municipio')
      ->references('mn_id_municipio')
      ->on('municipios')
      ->onDelete('cascade')
      ->onUpdate('cascade');      

$table->foreign('dp_id_type_user')
      ->references('tus_id')
      ->on('typeusers')
      ->onDelete('cascade')
      ->onUpdate('cascade');

Entidad [assistans]

$table->increments('id');
$table->integer('asst_id')->index()->unique();
$table->timestamps();  

$table->foreign('asst_id')
      ->references('dp_id')
      ->on('datospersonales')
      ->onDelete('cascade')
      ->onUpdate('cascade');      

Entidad [beneficiarios]

$table->increments('id');
$table->integer('b_id_beneficiario')->index()->unique();
$table->string('b_grado');
$table->string('b_me_trabajador');
$table->string('b_jornada');
$table->string('b_acudiente');
$table->integer('b_ins_educativa')->index()->unique();
$table->timestamps();

$table->foreign('b_id_beneficiario')
      ->references('dp_id')
      ->on('datospersonales')
      ->onDelete('cascade')
      ->onUpdate('cascade'); 

Entidad [instituciones]

$table->increments('id');
$table->integer('inst_id')->index()->unique();
$table->string('inst_name',200);
$table->string('inst_address',400);
$table->string('inst_telefono',20);
$table->string('inst_correo')->nullable();
$table->timestamps();

$table->foreign('inst_id')
      ->references('b_ins_educativa')
      ->on('beneficiarios')
      ->onDelete('cascade')
      ->onUpdate('cascade');

Entidad [jornada]

$table->increments('id');
$table->integer()->index()->unique();

Entidad [padres]

$table->increments('id');
$table->integer('pd_id_padre')->index()->unique();
$table->timestamps();   

$table->foreign('pd_id_padre')
      ->references('dp_id')
      ->on('datospersonales')
      ->onDelete('cascade')
      ->onUpdate('cascade');

Entidad [profesores]

$table->increments('id');
$table->integer('pres_id_profesor')->index()->unique();
$table->integer('pres_id_programa')->index();
$table->timestamps();

$table->foreign('pres_id_profesor')
      ->references('dp_id')
      ->on('datospersonales')
      ->onDelete('cascade')
      ->onUpdate('cascade');

$table->foreign('pres_id_programa')
      ->references('p_id_programa')
      ->on('programas')
      ->onDelete('cascade')
      ->onUpdate('cascade');

Entidad [voluntarios]

$table->increments('id');
$table->integer('v_id_voluntario')->index()->unique();
$table->timestamps();

$table->foreign('v_id_voluntario')
      ->references('dp_id')
      ->on('datospersonales')
      ->onDelete('cascade')
      ->onUpdate('cascade');

Entidad [countbeneficierparents]

$table->increments('id');
$table->integer('cbp_id')->index();
$table->integer('cbp_id_parent')->index();
$table->integer('cbp_id_beneficier')->index()->unique();
$table->timestamps();

$table->foreign('cbp_id_parent')
      ->references('pd_id_padre')
      ->on('padres')
      ->onDeleted('cascade')
      ->onUpdate('cascade');

$table->foreign('cbp_id_beneficier')
      ->references('b_id_beneficiario')
      ->on('beneficiarios')
      ->onDeleted('cascade')
      ->onUpdate('cascade'); 


Entidad [countbeneficiervoluntary]

$table->increments('id');
$table->integer('cbv_id')->index()->unique();
$table->integer('cbv_id_voluntary')->index();
$table->integer('cbv_id_beneficier')->index()->unique();
$table->timestamps();

$table->foreign('cbv_id_voluntary')
      ->references('v_id_voluntario')
      ->on('voluntarios')
      ->onDeleted('cascade')
      ->onUpdate('cascade');

$table->foreign('cbv_id_beneficier')
      ->references('b_id_beneficiario')
      ->on('beneficiarios')
      ->onDeleted('cascade')
      ->onUpdate('cascade');              

Entidad [datosgenerales]

$table->increments('id');
$table->integer('dg_id')->index()->unique();
$table->integer('dg_id_typedocument')->index();
$table->string('dg_nombre',200);
$table->string('dg_apellido',200);            
$table->string('dg_telefono',20);
$table->string('dg_celular',20);
$table->string('dg_direccion',300);
$table->string('dg_correo',200);
$table->timestamps();

$table->foreign('dg_id_typedocument')
      ->references('td_id')
      ->on('typedocuments')
      ->onDelete('cascade')
      ->onUpdate('cascade');

Entidad [tipodonativos]

$table->increments('id');
$table->integer('td_id')->index()->unique();
$table->string('td_wordkey_name',120);
$table->timestamps();

Entidad [instrumentos]

$table->increments('id');
$table->integer('instr_id')->index()->unique();
$table->integer('instr_id_td')->index();
$table->string('instr_wordkey_name',120);
$table->timestamps();

$table->foreign('instr_id_td')
      ->references('td_id')
      ->on('tipodonativos')
      ->onDelete('cascade')
      ->onUpdate('cascade'); 

Entidad [subtipoinstru]

$table->increments('id');
$table->integer('subtinstr_id')->index()->unique();
$table->integer('subtinstr_id_tinstr')->index();
$table->string('subtinstr_wordkey_name',120);
$table->timestamps();

$table->foreign('subtinstr_id_tinstr')
      ->references('instr_id')
      ->on('instrumentos')
      ->onDelete('cascade')
      ->onUpdate('cascade');

Entidad [donaciones]

$table->increments('id');
$table->integer('d_id_donacion')->index()->unique();
$table->integer('d_id_programa')->index();
$table->integer('d_id_td')->index();
$table->integer('d_id_benefactor')->index();
$table->timestamps();

$table->foreign('d_id_td')
      ->references('td_id')
      ->on('tipodonativos')
      ->onDelete('cascade')
      ->onUpdate('cascade');

Entidad [users]

$table->increments('id');
$table->integer('us_id_datospersonales')->index()->unique();
$table->integer('us_id_roll')->index()->unique();
$table->integer('us_id_permiso')->index()->unique();
$table->string('us_email')->unique();
$table->string('us_password',60);
$table->rememberToken();
$table->timestamps();

$table->foreign('us_id_datospersonales')
      ->references('dp_id')
      ->on('datospersonales')
      ->onDelete('cascade')
      ->onUpdate('cascade');

$table->foreign('us_id_roll')
      ->references('rl_id')
      ->on('rolls')
      ->onDelete('cascade')
      ->onUpdate('cascade');

$table->foreign('us_id_permiso')
      ->references('pm_id')
      ->on('permisos')
      ->onDelete('cascade')
      ->onUpdate('cascade');


Entidad [hojavida]

$table->increments('id');
$table->integer('hv_id')->index()->unique();
$table->integer('hv_id_datospersonales')->index()->unique();
$table->timestamps();

$table->foreign('hv_id_datospersonales')
      ->references('dp_id')
      ->on('datospersonales')
      ->onDelete('cascade')
      ->onUpdate('cascade');

Entidad [contactos]

$table->increments('id');
$table->integer('ct_id')->index()->unique();
$table->integer('ct_id_datospersonales')->index();
$table->integer('ct_dg_id')->index()->unique();
$table->timestamps();

$table->foreign('ct_id_datospersonales')
      ->references('dp_id')
      ->on('datospersonales')
      ->onDelete('cascade')
      ->onUpdate('cascade');

$table->foreign('ct_dg_id')
      ->references('dg_id')
      ->on('datosgenerales')
      ->onDelete('cascade')
      ->onUpdate('cascade');

Entidad [empleos]

$table->increments('id');
$table->integer('emple_id')->index()->unique();
$table->integer('emple_id_datospersonales')->index();
$table->string('emple_nombre_entidad',300);
$table->string('emple_direccion_entidad',300);
$table->integer('emple_dg_id')->index()->unique();
$table->string('emple_cargo');           
$table->date('emple_tiempo_begin');
$table->date('emple_tiempo_finishes');
$table->timestamps();

$table->foreign('emple_id_datospersonales')
      ->references('dp_id')
      ->on('datospersonales')
      ->onDelete('cascade')
      ->onUpdate('cascade');

$table->foreign('emple_dg_id')
      ->references('dg_id')
      ->on('datosgenerales')
      ->onDelete('cascade')
      ->onUpdate('cascade');

Entidad [infofamiliar]

$table->increments('id');
$table->integer('inffam_id')->index()->unique();
$table->integer('inffam_id_datospersonales')->index();
$table->integer('inffam_id_parentesco')->index();
$table->string('inffam_ocupacion',200);
$table->integer('inffam_dg_id')->index()->unique();        
$table->timestamps();

$table->foreign('inffam_id_datospersonales')
      ->references('dp_id')
      ->on('datospersonales')
      ->onDelete('cascade')
      ->onUpdate('cascade');

$table->foreign('inffam_id_parentesco')
      ->references('pr_id_parentesco')
      ->on('parentescos')
      ->onDelete('cascade')
      ->onUpdate('cascade');      

$table->foreign('inffam_dg_id')
      ->references('dg_id')
      ->on('datosgenerales')
      ->onDelete('cascade')
      ->onUpdate('cascade');

Entidad [infoextra]

$table->increments('id');
$table->integer('infext_id')->index()->unique();
$table->integer('infext_id_datospersonales')->index();
$table->string('infext_destreza',325);
$table->string('infext_nivel',100);
$table->timestamps();

$table->foreign('infext_id_datospersonales')
      ->references('dp_id')
      ->on('datospersonales')
      ->onDelete('cascade')
      ->onUpdate('cascade');

Entidad [posts]

$table->increments('id');
$table->integer('pst_id')->index()->unique();
$table->integer('pst_id_autor')->index();
$table->integer('pst_id_src')->index()->unique()->nullable();
$table->date('pst_eventdate_begin');
$table->date('pst_eventdate_finish');
$table->time('pst_eventtime_begin');
$table->time('pst_eventtime_finishes');
$table->timestamps();

$table->foreign('pst_id_autor')
      ->references('dp_id')
      ->on('datospersonales')
      ->onDelete('cascade')
      ->onUpdate('cascade');

$table->foreign('pst_id_src')
     ->references('srcapp_id')
     ->on('srcapps')
     ->onDelete('cascade')
     ->onUpdate('cascade');

Entidad [descriptions]

$table->increments('id');
$table->integer('desc_id')->index()->unique();
$table->string('desc_title',200);
$table->string('desc_text',900);
$table->integer('desc_id_post')->index()->unique();
$table->timestamps();

$table->foreign('desc_id_post')
      ->references('pst_id')
      ->on('posts')
      ->onDelete('cascade')
      ->onUpdate('cascade');











=========================================================
EN ESPERA
=========================================================
Entidad [querytype]

qt_id
qt_categoria

Entidad [queryregister]

qr_id
qr_id_type
qr_id_table
qr_query_sintax

Entidad [querylog]

ql_id
ql_id_qr
ql_name_errors
=========================================================





