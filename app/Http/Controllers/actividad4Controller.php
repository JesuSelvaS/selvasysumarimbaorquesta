<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class actividad4Controller extends Controller
{
    public function index(){
        $prioridades = DB::table('tblprioridad')->get();
        $posts = DB::table('tblpost')
        ->select(
            'tblpost.titulo as titulo',
            'tblpost.descripcion as desc',
            'tblpost.color as colorPost',
            'tblpost.id as idPost',
            'tblprioridad.idprioridad as idprioridad',
            'tblprioridad.color as colorPrioridad',
            'tblprioridad.nombre as nombrePrioridad'
        )
        ->join('tblprioridad','tblpost.idprioridad','=','tblprioridad.idprioridad')
        ->where('activo',1)
        ->get();
        
        return view('cliente.actividad4',['nameActividad'=>'actividad4',
                                          'prioridades' => $prioridades,
                                          'posts'=>$posts]);
    }
    public function addPost(Request $request){
        // dd("hola");
        $opcion = 1;
        $titulo = $request->get('title');
        $desc = $request->get('description');
        $color = $request->get('color');
        $prioridad = $request->get('priority');
        $sql = "call SP_AddPost(
            '".$opcion."',
            '".$titulo."',
            '".$desc."',
            '".$color."',
            '".$prioridad."',
            '1'
        )";
        $datos =  DB::select($sql, array(1,10));
    
        // dd($datos);
        return $datos;
    }
    public function removePost(Request $request){
        $opcion = 3;
        $idRemove = $request->get('idP');
        $sql = "call SP_AddPost(
            '".$opcion."',
            'null',
            'null',
            'null',
            '1',
            '".$idRemove."'
        )";
        $datos =  DB::select($sql, array(1,10));
       
        return $datos;
    }
    public function editPost(Request $request){
        // dd($request->all());
        $opcion = 2;
        $idEdit = $request->get('idP');
        $titulo = $request->get('post');
        $desc = $request->get('descPost');
        $prioridad = $request->get('prioridad');
        $sql = "call SP_AddPost(
            '".$opcion."',
            '".$titulo."',
            '".$desc."',
            'null',
            '".$prioridad."',
            '".$idEdit."'
        )";
        $datos =  DB::select($sql, array(1,10));
    //    dd($datos);
        return $datos;
    }
}
