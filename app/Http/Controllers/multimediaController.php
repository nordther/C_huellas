<?php

namespace DejandoHuella\Http\Controllers;

use Illuminate\Http\Request;

use DejandoHuella\Http\Requests;
use DejandoHuella\Http\Controllers\Controller;
use DejandoHuella\srcapp;
use DejandoHuella\language;
use DejandoHuella\guitype;
use DejandoHuella\guitext;

class multimediaController extends Controller
{
    
    public function index()
    {
        $data = [
        'multimediaAuth' => true,
        'authconfirm' => null,
        'roll' => 'Multimedia',
        "title-modul" => "Media",
        "dll" => [  'css' => \DB::table('srcapps')->select('*')->where('srcapp_fileformat','=','css')->orderBy('srcapp_id', 'asc')->get(),
                    'js' => \DB::table('srcapps')->select('*')->where('srcapp_fileformat','=','js')->orderBy('srcapp_id', 'asc')->get(),
                    'icon' => \DB::table('srcapps')->select('*')->where('srcapp_fileformat','=','png','and','srcapp_dir','=','img/icon/nav/')->get()]
       
        ];    
        return view('modulos.functionMultimedia.index',compact('data'));
    }

    public function watch(){
        $data = [
        'multimediaAuth' => true,
        'authconfirm' => null,
        'roll' => 'Multimedia',
        "title-modul" => "Media"       
        ];
        return view('modulos.functionMultimedia.watchFunction.index',compact('data'));
    }

    public function audio(){
        $data = [
        'multimediaAuth' => true,
        'authconfirm' => null,
        'roll' => 'Multimedia',
        "title-modul" => "Media"       
        ];
        return view('modulos.functionMultimedia.audioFunction.index',compact('data'));
    }

    public function gallery(){
        $data = [
        'multimediaAuth' => true,
        'authconfirm' => null,
        'roll' => 'Multimedia',
        "title-modul" => "Media"       
        ];
        return view('modulos.functionMultimedia.galleryFunction.index',compact('data'));
    }

    public function watchvideo($vId){
        $data = [
        'multimediaAuth' => true,
        'authconfirm' => null,
        'roll' => 'Multimedia',
        'idVideo' => $vId,
        "title-modul" => "Media"
        ];
        return view('modulos.functionMultimedia.watchFunction.watchingVideoFunction.index',compact('data'));
    }

    public function listenAudio($aId){
        $data = [
        'multimediaAuth' => true,
        'authconfirm' => null,
        'roll' => 'Multimedia',
        'idVideo' => $aId,
        "title-modul" => "Media"
        ];
        return view('modulos.functionMultimedia.watchFunction.watchingVideoFunction.index',compact('data'));
    }

    public function watchGallery($gId){
        $data = [
        'multimediaAuth' => true,
        'authconfirm' => null,
        'roll' => 'Multimedia',
        'idVideo' => $gId,
        "title-modul" => "Media"
        ];
        return view('modulos.functionMultimedia.watchFunction.watchingVideoFunction.index',compact('data'));
    }
}
