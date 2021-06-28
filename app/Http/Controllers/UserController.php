<?php

namespace App\Http\Controllers;

use App\Role;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class UserController extends Controller
{
    //
    public function index()
    {
        $usuarios = DB::table('users as u')
            ->join('roles as t','u.rol','=','t.id')
            ->select('u.*','t.rol')
            ->paginate(10);
        return view('usuarios.index')->with('usuarios',$usuarios);
    }
    public function create(){
        $roles= Role::all();
        $users= User::all();
        return view('auth.register')->with('users',$users)->with('roles',$roles);
    }
    public function editar($id){
        $user=User::findOrFail($id);
        $roles=Role::all();
        return view("usuarios.editar")
            ->with("user",$user)
            ->with("roles",$roles);
    }

    public function update(Request $request, $id)
    {

        $user = User::findOrFail($id);
        $user->name = $request->input("name");
        $user->email = $request->input("email");
        $user->rol = $request->input("rol");
        $path = public_path().'\images\pacientes';//Carpeta publica de las imagenes
        if($request->imagen_url){
            /***Si la imagen es enviada por el usuario se debe eliminar la anterior **/
            $img_anterior=public_path()."/images/pacientes/".$user->imagen;
            if (File::exists($img_anterior)){
                File::delete($img_anterior);
            }
            $foto = $_FILES["imagen_url"]["name"];
            $ruta = $_FILES["imagen_url"]["tmp_name"];
            //-------------VALIDAR SI LA CARPETA EXISTE---------------------
            if (!file_exists($path)) {
                mkdir($path, 0777, true);
            }
            //-------------------------------------------------------------
            $destino = "images/pasientes/".$foto;
            copy($ruta, $destino);
            $user->imagen=$foto;
        }
        $user->save();
        return redirect()->route("registro.tabla")
            ->with("exito", "Se creo exitosamente el producto.");
    }

}
