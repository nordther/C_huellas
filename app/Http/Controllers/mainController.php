<?php

namespace DejandoHuella\Http\Controllers;

use Auth;
use Redirect;
use Schema;
use Illuminate\Http\Request;
use Illuminate\Database\Schema\Blueprint;
use DejandoHuella\Http\Requests;
use DejandoHuella\Http\Controllers\Controller;
use DejandoHuella\paise;
use DejandoHuella\genero;
use DejandoHuella\user;
use DejandoHuella\datospersonale;
use DejandoHuella\permiso;
use DejandoHuella\estadopersona;
use DejandoHuella\roll;
use DejandoHuella\srcapp;
use DejandoHuella\language;
use DejandoHuella\guitype;
use DejandoHuella\guitext;
use DejandoHuella\moduls;
use DejandoHuella\typedocument;
use DejandoHuella\ClassCunstom\classChargenMainSistemPrimary;
use DejandoHuella\ClassCunstom\classChargenGeographicSistemPrimary;
use DejandoHuella\typeuser;
use DejandoHuella\assistan;
use DejandoHuella\categoriaprograma;

class mainController extends Controller
{
    private static $chargen = null;
    private static $classObj = null;

    public function index(){
        

        if (Auth::check() > 0) {

            $roll = \DB::table('rolls')->select('rl_wordkey_name')->where('rl_id','=',Auth::user()->us_id_roll)->take(1)->get();

            foreach ($roll as $rows) {
                $redirect = ['roll' => $rows->rl_wordkey_name];
            }
            return Redirect::to($redirect['roll']);

        }else{
           
        

        mainController::functionChargenPrimary();    
            
        $data = [ 
            "title-modul" => null,              
            "authconfirm" => Auth::check(),
            "multimediaAuth" => false,
            "roll" => "",
            "dll" => [  'css' => \DB::table('srcapps')->select('*')->where('srcapp_fileformat','=','css')->orderBy('srcapp_id', 'asc')->get(),
                        'js' => \DB::table('srcapps')->select('*')->where('srcapp_fileformat','=','js')->orderBy('srcapp_id', 'asc')->get(),
                        'icon' => \DB::table('srcapps')->select('*')->where('srcapp_fileformat','=','png','and','srcapp_dir','=','img/icon/nav/')->get()]
                      
        ];
                    
        return view('index',compact('data'));

        }

    	 
        
    }    
   public static function functionChargenPrimary(){
        $v_f = [
            "class" => ['ChrM' => new classChargenMainSistemPrimary,
                        'ChrG' => new classChargenGeographicSistemPrimary]            
        ];  
   	    $chargenData = [
            'paises' => \DB::table('paises')->get(),
            'generos' => \DB::table('generos')->get(),
            'datospersonales' => \DB::table('datospersonales')->get(),
            'users' => \DB::table('users')->get(),
            'permisos' => \DB::table('permisos')->get(),
            'estadopersonas' => \DB::table('estadopersonas')->get(),
            'rolls' => \DB::table('rolls')->get(), 
            'srcapps' => \DB::table('srcapps')->get(),
            'languages' => \DB::table('languages')->get(),
            'guitypes' => \DB::table('guitypes')->get(),
            'guitexts' => \DB::table('guitexts')->get(),
            'moduls' => \DB::table('moduls')->get(),
            'typedocuments' => \DB::table('typedocuments')->get(),
            'typeusers' => \DB::table('typeusers')->get(),
            'assistans' => \DB::table('assistans')->get(),
            'categoriaprogramas' => \DB::table('categoriaprogramas')->get()
            ];   

         if ($chargenData['categoriaprogramas'] == false) {
            $chargen = \DB::table('categoriaprogramas')->insert($v_f["class"]['ChrM']::createCategoPrograms());
        }else{
            $chargen = null;
        }    
        
        if ($chargenData['typeusers'] == false) {
            $chargen = \DB::table('typeusers')->insert($v_f['class']['ChrM']::createTypeUsers());
        }else{
            $chargen = null;
        }

        if ($chargenData['typedocuments'] == false) {
            $chargen = \DB::table('typedocuments')->insert($v_f["class"]['ChrM']::createTypeDocument());
        }else{
            $chargen = null;
        }   

        if ($chargenData['generos'] == false) {
            $chargen = \DB::table('generos')->insert($v_f["class"]['ChrM']::createGeneros());
        }else{
            $chargen = null;
        } 

        if ($chargenData['rolls'] == false) {
            $chargen = \DB::table('rolls')->insert($v_f["class"]['ChrM']::createRolls());
        }else{
            $chargen = null;
        }        
        
        if ($chargenData['estadopersonas'] == false) {
                $chargen = \DB::table('estadopersonas')->insert($v_f["class"]['ChrM']::createUserAdminStatus());
        }else{
            $chargen = null;
        } 

        if ($chargenData['datospersonales'] == false) {
            $chargen = \DB::table('datospersonales')->insert($v_f["class"]['ChrM']::createUserAdminDataPersonal());
        }else{
            $chargen = null;
        }

        if($chargenData['assistans'] == false){
            $chargen = \DB::table('assistans')->insert($v_f['class']['ChrM']::createUserAdminAssistan());
        }else{
            $chargen = null;
        }

        if ($chargenData['permisos'] == false) {
                $chargen = \DB::table('permisos')->insert($v_f["class"]['ChrM']::createUserAdminPermi());
        }else{
            $chargen = null;
        } 

        if ($chargenData['users'] == false) {
                $chargen = \DB::table('users')->insert($v_f["class"]['ChrM']::createUserAdminLogin());
        }else{
            $chargen = null;
        }   

        if ($chargenData['srcapps'] == false) {
            $chargen = \DB::table('srcapps')->insert($v_f["class"]['ChrM']::createSrcLibrary());
            $chargen = \DB::table('srcapps')->insert($v_f["class"]['ChrM']::createSrcIcons());             
        }else{
            $chargen = null;
        }         

        if ($chargenData['languages'] == false) {
                $chargen = \DB::table('languages')->insert($v_f["class"]['ChrM']::createLaguanges());
        }else{
            $chargen = null;
        } 

        if ($chargenData['guitypes'] == false) {
                $chargen = \DB::table('guitypes')->insert($v_f["class"]['ChrM']::createGuiElements());
        }else{
            $chargen = null;
        } 

        if ($chargenData['guitexts'] == false) {
                $chargen = \DB::table('guitexts')->insert($v_f["class"]['ChrM']::createTextGui());
        }else{
            $chargen = null;
        } 

        if ($chargenData['moduls'] == false) {
                $chargen = \DB::table('moduls')->insert($v_f["class"]['ChrM']::createModuls());
        }else{
            $chargen = null;
        } 

        

   }
   
}
