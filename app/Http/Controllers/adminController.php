<?php

namespace DejandoHuella\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use DejandoHuella\Http\Requests;
use DejandoHuella\Http\Requests\adminRequest;
use DejandoHuella\Http\Controllers\Controller;
use DejandoHuella\genero;
use DejandoHuella\datospersonale;
use DejandoHuella\moduls;
use DejandoHuella\srcapp;
use DejandoHuella\guitext;
use DejandoHuella\guitype;
use DejandoHuella\language;
use DejandoHuella\typedocument;
use DejandoHuella\ClassCunstom\classEncriptationApp;
use Auth;
use Redirect;
use App;
use Lang;



class adminController extends Controller
{
   
    public function index(){
        if (Auth::check() > 0) {

            $datasession = 
            \DB::table('datospersonales')
                            ->select('*')
                            ->join('rolls','datospersonales.dp_id_roll','=','rolls.rl_id')
                            ->join('permisos','datospersonales.dp_id','=','permisos.pm_id')
                            ->join('generos','datospersonales.dp_id_genero','=','generos.g_id_genero')
                            ->join('estadopersonas','datospersonales.dp_id','=','estadopersonas.estp_id')
                            ->where('datospersonales.dp_id','=',Auth::user()->us_id_datospersonales,'and','estadopersonas.estp_activeordesable','=',1)
                            ->take(1)
                            ->get();

            foreach ($datasession as $rows) {
               $dataChargen = [
               'id' => $rows->dp_id,
               'nombre' => $rows->dp_nombre,
               'apellido' => $rows->dp_apellido,
               'fe_naci' => $rows->dp_fe_nacimiento,
               'telefono' => $rows->dp_telefono,
               'address' => $rows->dp_direccion,               
               'roll' => $rows->rl_wordkey_name,
               'edad' => $rows->dp_edad,
               'genero' => $rows->g_wordkey_genero,
               'status' => $rows->estp_activeordesable,
               'permisos' => [
                        'create' => $rows->pm_create,
                        'ready'  => $rows->pm_ready,
                        'update' => $rows->pm_update,
                        'delete' => $rows->pm_delete
                ]];
            }

            $dataLg = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'],0,2);              

              $dataSistem = ['lang' => $dataLg];
              
              $idIdioma = \DB::table('languages')->select('lg_id')->where('lg_wordkey_language','=',$dataSistem['lang'])->take(1)->get();    

              foreach ($idIdioma as $rows) {
                $lgId = $rows->lg_id;
              }

            $data = [
                "id" => $dataChargen['id'],
                "icon" => "",
                "nombre" => $dataChargen['nombre'],
                "apellido" => $dataChargen['apellido'],
                "fe_naci" => $dataChargen['fe_naci'],
                "roll" => $dataChargen['roll'],
                "genero" => $dataChargen['genero'],
                "permisos" => [
                        'create' => $dataChargen['permisos']['create'],
                        'ready'  => $dataChargen['permisos']['ready'],
                        'update' => $dataChargen['permisos']['update'],
                        'delete' => $dataChargen['permisos']['delete']
                ],
                "authconfirm" => Auth::check(),
                "multimediaAuth" => false,
                "title-modul" => "Admin",
                "type-modul" => "",
                "dll" => [  'css' => \DB::table('srcapps')->select('*')->where('srcapp_fileformat','=','css')->orderBy('srcapp_id', 'asc')->get(),
                        'js' => \DB::table('srcapps')->select('*')->where('srcapp_fileformat','=','js')->orderBy('srcapp_id', 'asc')->get(),
                        'icon' => \DB::table('srcapps')->select('*')->where('srcapp_fileformat','=','png','and','srcapp_dir','=','img/icon/nav/')->get(),
                        'text' => \DB::table('guitexts')->select('*')
                                    ->join('guitypes','guitexts.gtxt_id_gtype','=','guitypes.gtype_id')
                                    ->join('languages','guitexts.gtxt_id_language','=','languages.lg_id')
                                    ->where('guitexts.gtxt_id_language','=',$lgId)->get()]
             ];
            return view('modulos.functionAdministration.index',compact('data'));

            
        }else{
            return Redirect::to('/'); 
        }
        
    }  
   
    public function createViewDinamyn($idView){       
        if (Auth::check() > 0) {  

            $datasession = 
            \DB::table('datospersonales')
                            ->select('*')
                            ->join('rolls','datospersonales.dp_id_roll','=','rolls.rl_id')
                            ->join('permisos','datospersonales.dp_id','=','permisos.pm_id')
                            ->join('generos','datospersonales.dp_id_genero','=','generos.g_id_genero')
                            ->join('estadopersonas','datospersonales.dp_id','=','estadopersonas.estp_id')
                            ->where('datospersonales.dp_id','=',Auth::user()->us_id_datospersonales,'and','estadopersonas.estp_activeordesable','=',1)
                            ->take(1)
                            ->get();

            foreach ($datasession as $rows) {
               $dataChargen = [
               'id' => $rows->dp_id,
               'nombre' => $rows->dp_nombre,
               'apellido' => $rows->dp_apellido,
               'fe_naci' => $rows->dp_fe_nacimiento,
               'telefono' => $rows->dp_telefono,
               'address' => $rows->dp_direccion,               
               'roll' => $rows->rl_wordkey_name,
               'edad' => $rows->dp_edad,
               'genero' => $rows->g_wordkey_genero,
               'status' => $rows->estp_activeordesable,
               'permisos' => [
                        'create' => $rows->pm_create,
                        'ready'  => $rows->pm_ready,
                        'update' => $rows->pm_update,
                        'delete' => $rows->pm_delete
                ]];
            }



            $modulo = \DB::table('moduls')->select('*')->where('mdls_paramt_name','=',$idView)->take(1)->get();

            foreach ($modulo as $rows) {
                $moduls = ['patch' => $rows->mdls_patch,
                           'title' => $idView];
            }

              $dataLg = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'],0,2);              

              $dataSistem = ['lang' => $dataLg];
              
              $idIdioma = \DB::table('languages')->select('lg_id')->where('lg_wordkey_language','=',$dataSistem['lang'])->take(1)->get();    

              foreach ($idIdioma as $rows) {
                $lgId = $rows->lg_id;
              }

            $data = [
                "id" => $dataChargen['id'],
                "icon" => "",
                "nombre" => $dataChargen['nombre'],
                "apellido" => $dataChargen['apellido'],
                "fe_naci" => $dataChargen['fe_naci'],
                "roll" => $dataChargen['roll'],
                "genero" => $dataChargen['genero'],
                "permisos" => [
                        'create' => $dataChargen['permisos']['create'],
                        'ready'  => $dataChargen['permisos']['ready'],
                        'update' => $dataChargen['permisos']['update'],
                        'delete' => $dataChargen['permisos']['delete']
                ],
                "authconfirm" => Auth::check(),
                "multimediaAuth" => false,
                "title-modul" => "Admin",
                "type-modul" => $moduls['title'],
                "dll" => [  'css' => \DB::table('srcapps')->select('*')->where('srcapp_fileformat','=','css')->orderBy('srcapp_id', 'asc')->get(),
                            'js' => \DB::table('srcapps')->select('*')->where('srcapp_fileformat','=','js')->orderBy('srcapp_id', 'asc')->get(),
                            'icon' => \DB::table('srcapps')->select('*')->where('srcapp_fileformat','=','png','and','srcapp_dir','=','img/icon/nav/')->get(),
                            'text' => \DB::table('guitexts')->select('*')
                                    ->join('guitypes','guitexts.gtxt_id_gtype','=','guitypes.gtype_id')
                                    ->join('languages','guitexts.gtxt_id_language','=','languages.lg_id')
                                    ->where('guitexts.gtxt_id_language','=',$lgId)->get(),


                                    

                            'comboTypeDocument' => \DB::table('guitexts')->select('*')
                                    ->join('typedocuments','guitexts.gtxt_paramt_wordkey','=','typedocuments.td_wordkey_name')
                                    ->join('guitypes','guitexts.gtxt_id_gtype','=','guitypes.gtype_id')
                                    ->join('languages','guitexts.gtxt_id_language','=','languages.lg_id')
                                    ->where('guitexts.gtxt_id_language','=',$lgId)->lists('gtxt_text','td_id'),



                            'comboGender' => \DB::table('guitexts')->select('*')
                                    ->join('generos','guitexts.gtxt_paramt_wordkey','=','generos.g_wordkey_genero')
                                    ->join('guitypes','guitexts.gtxt_id_gtype','=','guitypes.gtype_id')
                                    ->join('languages','guitexts.gtxt_id_language','=','languages.lg_id')
                                    ->where('guitexts.gtxt_id_language','=',$lgId)->lists('gtxt_text','g_id_genero'),
                            'comboRoll' => \DB::table('guitexts')->select('*')
                                    ->join('rolls','guitexts.gtxt_paramt_wordkey','=','rolls.rl_wordkey_name')
                                    ->join('guitypes','guitexts.gtxt_id_gtype','=','guitypes.gtype_id')
                                    ->join('languages','guitexts.gtxt_id_language','=','languages.lg_id')
                                    ->where('guitexts.gtxt_id_language','=',$lgId)
                                    ->where('guitexts.gtxt_paramt_wordkey','<>','Usn')->lists('gtxt_text','rl_id'),  
                            'comboTypeUsers'=> \DB::table('guitexts')->select('*')
                                    ->join('typeusers','guitexts.gtxt_paramt_wordkey','=','typeusers.tus_wordkey_name')
                                    ->join('guitypes','guitexts.gtxt_id_gtype','=','guitypes.gtype_id')
                                    ->join('languages','guitexts.gtxt_id_language','=','languages.lg_id') 
                                    ->where('guitexts.gtxt_id_language','=',$lgId)
                                    ->where('guitexts.gtxt_id_gtype','=',2)->lists('gtxt_text','tus_id'),
                            'comboCategoPrograms' => \DB::table('guitexts')->select('*')
                                    ->join('categoriaprogramas','guitexts.gtxt_paramt_wordkey','=','categoriaprogramas.cp_wordkey_name')
                                    ->join('guitypes','guitexts.gtxt_id_gtype','=','guitypes.gtype_id')
                                    ->join('languages','guitexts.gtxt_id_language','=','languages.lg_id') 
                                    ->where('guitexts.gtxt_id_language','=',$lgId)
                                    ->where('guitexts.gtxt_id_gtype','=',2)->lists('gtxt_text','cp_id_categoria'),        
                            ],                   
                            "dataForm" => [
                            'iconUserSearch' => '',
                            'usersSearch' => \DB::table('datospersonales')->select('*')
                                          ->join('users','datospersonales.dp_id','=','users.us_id_datospersonales')
                                          ->join('rolls','datospersonales.dp_id_roll','=','rolls.rl_id')
                                          ->join('estadopersonas','datospersonales.dp_id_estp','=','estadopersonas.estp_id')->get()
                    ]                           
             ]; 

            /*return var_dump($lgId);  */      
          
          return view($moduls['patch'],compact('data'));

        }else{
            return Redirect::to('/'); 
        }
    }
    public function insertData(adminRequest $request){
       
    }

    public function perfil($id){  

        if ($id == null) {            
               

                abort(403, 'Unauthorized action.');

         }else{ 

            $datasession = 
            \DB::table('datospersonales')
                            ->select('*')
                            ->join('rolls','datospersonales.dp_id_roll','=','rolls.rl_id')
                            ->join('permisos','datospersonales.dp_id','=','permisos.pm_id')
                            ->join('generos','datospersonales.dp_id_genero','=','generos.g_id_genero')
                            ->join('estadopersonas','datospersonales.dp_id','=','estadopersonas.estp_id')
                            ->where('datospersonales.dp_id','=',Auth::user()->us_id_datospersonales,'and','estadopersonas.estp_activeordesable','=',1)
                            ->take(1)
                            ->get();

            foreach ($datasession as $rows) {
               $dataChargen = [
               'id' => $rows->dp_id,
               'nombre' => $rows->dp_nombre,
               'apellido' => $rows->dp_apellido,
               'fe_naci' => $rows->dp_fe_nacimiento,
               'telefono' => $rows->dp_telefono,
               'address' => $rows->dp_direccion,               
               'roll' => $rows->rl_wordkey_name,
               'edad' => $rows->dp_edad,
               'genero' => $rows->g_wordkey_genero,
               'status' => $rows->estp_activeordesable,
               'permisos' => [
                        'create' => $rows->pm_create,
                        'ready'  => $rows->pm_ready,
                        'update' => $rows->pm_update,
                        'delete' => $rows->pm_delete
                ]];
            }

            $dataLg = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'],0,2);              

              $dataSistem = ['lang' => $dataLg];
              
              $idIdioma = \DB::table('languages')->select('lg_id')->where('lg_wordkey_language','=',$dataSistem['lang'])->take(1)->get();    

              foreach ($idIdioma as $rows) {
                $lgId = $rows->lg_id;
              }

             $data = [
                "id" => $dataChargen['id'],
                "icon" => "",
                "nombre" => $dataChargen['nombre'],
                "apellido" => $dataChargen['apellido'],
                "fe_naci" => $dataChargen['fe_naci'],
                "telefono" => $dataChargen['telefono'],
                "address" => $dataChargen['address'],
                "edad" => $dataChargen['edad'],
                "genero" => $dataChargen['genero'],
                "roll" => $dataChargen['roll'],
                "permisos" => [
                        'create' => $dataChargen['permisos']['create'],
                        'ready'  => $dataChargen['permisos']['ready'],
                        'update' => $dataChargen['permisos']['update'],
                        'delete' => $dataChargen['permisos']['delete']
                ],
                "authconfirm" => Auth::check(),
                "multimediaAuth" => false,
                "title-modul" => "Admin",
                "type-modul" => "perfil",
                "dll" => [  'css' => \DB::table('srcapps')->select('*')->where('srcapp_fileformat','=','css')->orderBy('srcapp_id', 'asc')->get(),
                        'js' => \DB::table('srcapps')->select('*')->where('srcapp_fileformat','=','js')->orderBy('srcapp_id', 'asc')->get(),
                        'icon' => \DB::table('srcapps')->select('*')->where('srcapp_fileformat','=','png','and','srcapp_dir','=','img/icon/nav/')->get(),
                        'text' => \DB::table('guitexts')->select('*')
                                    ->join('guitypes','guitexts.gtxt_id_gtype','=','guitypes.gtype_id')
                                    ->join('languages','guitexts.gtxt_id_language','=','languages.lg_id')
                                    ->where('guitexts.gtxt_id_language','=',$lgId)->get()],
                "dataForm" => [
                            'iconUserSearch' => ''
                    ],
                "dataquery" => [

                          'id',
                          'nombre',
                          'apellido',
                          'fe_naci',
                          'roll',
                          'activeordesable',                        

                ]             
             ];        

                return view('modulos.functionAdministration.perfilAdministration.index',compact('data'));
             
        }
    }

    public function cambiosPerfiles(Request $request){
        

          return redirect('/'.$request['v_rollUserForm'].'/perfil/'.$request['v_idUserForm'].'');      
    }

    public function buscarUsuario(){
        return "Buscar usuario";
    }

    public function buscarAgenda(){
        return "Buscar Agenda";
    }
}
