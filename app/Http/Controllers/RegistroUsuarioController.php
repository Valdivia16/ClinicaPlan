<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class RegistroUsuarioController extends Controller
{
    //
    public function index(){
        $user= User::orderBy('id')->paginate(3);

        Return view ('auth.register',compact("user"));
    }



    public function store(Request $request){

       // $nombre = $request->input("dni");


        $path = public_path() . '/foto';//Carpeta publica de las imagenes

        //-------------VALIDAR SI LA CARPETA EXISTE---------------------

        if (!file_exists($path)) {
            mkdir($path, 0777, true);
        }
        if ($request->foto) {
            $imagen = $_FILES["foto"]["name"];
            $ruta = $_FILES["foto"]["tmp_name"];
            $destino = "foto/". $imagen;
            copy($ruta, $destino);
        }

        $user = new User();

        $user ->foto =  $imagen;
        $user ->name=$request->input("name");
        $user ->email=$request->input("email");
        $user ->password=bcrypt($request->input("password"));
        $user ->rol=$request->input("rol");
        $user ->save();

        //return response()->json($registroPacientes );
        return redirect()->route("home")->with("Guardado con éxito");

    }
    public function edit(Request $request)
    {

        $this->validate($request, [
            'name'=>'required',


        ]);

        try {

            $path = public_path() . '/images/Foto';//Carpeta publica de las imagenes

            //-------------VALIDAR SI LA CARPETA EXISTE---------------------

            if (!file_exists($path)) {
                mkdir($path, 0777, true);
            }
            $nombre = $request->input("codigo");

            $id = Auth::user()->id;

            $usuario =User::findOrFail($id);
            $usuario->name = $request->input("name");


            if ($request->foto) {
                /***Si la imagen es enviada por el usuario se debe eliminar la anterior **/
                $img_anterior=public_path()."/images/Foto/".$usuario->foto;
                if (File::exists($img_anterior)){
                    File::delete($img_anterior);
                }
                /**-------------------------------------------*/
                $imagenEditada = $_FILES["foto"]["name"];
                $ruta = $_FILES["foto"]["tmp_name"];
                //-------------VALIDAR SI LA CARPETA EXISTE---------------------
                if (!file_exists($path)) {
                    mkdir($path, 0777, true);
                }
                //-------------------------------------------------------------
                $destino = "images/Foto/" .$nombre. $imagenEditada;
                copy($ruta, $destino);
                $usuario->foto = $nombre.$imagenEditada;
            }
            $usuario->save();




            return redirect()->route("home")->withExito("Usuario editado correctamente");
        } catch (ValidationException $exception) {
            return redirect()->route("home")->withExito('errors', 'errors')->with('id', $request->input("id"))->withErrors($exception->errors());
        }

    }

}
