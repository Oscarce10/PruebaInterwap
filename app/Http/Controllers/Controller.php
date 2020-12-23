<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(){
        $activos = DB::table('users')->where("codigo", "=", 1)->get();
        $inactivos = DB::table('users')->where("codigo", "=", 2)->get();
        $espera = DB::table('users')->where("codigo", "=", 3)->get();
        return view('show-users', ["activos" => $activos, "inactivos" => $inactivos, "espera" => $espera]);
    }

    public function store(Request $input)
    {
        $input->validate([
            'file' => ['required', 'mimes:txt'],
        ]);


        $content = "";
        $file = fopen($input->file, "r");
        while(!feof($file)) {
            $content .= fgets($file);
        }

        fclose($file);
        $content = explode ( ',' , $content);
        var_dump($content);

        if(empty($content[3]) || $content[3] == '' ){
            return Redirect::to('/')->with('danger', 'Se debe incluir codigo de usuario');
        } else{
            User::create([
                'nombre' => $content[0],
                'apellido' => $content[1],
                'email' => $content[2],
                'codigo' => $content[3]
                ]);
            return Redirect::to('/')->with('success', 'Usuario registrado satisfactoriamente');
        }

    }

    public function destroy($id)
    {

        User::destroy($id);
        return redirect(route("/"))->with('success', 'Usuario eliminado satisfactoriamente');
    }

    public function edit($id){
        $user = User::where('id', $id) -> first();
        return view("edit-user", ["user" => $user]);
    }

    public function update(Request $request){
        User::find($request->id)->update([
            'nombre' => $request->nombre,
            'apellido' => $request->apellido,
            'email' => $request->email,
            'codigo' => $request->codigo,
            ]);
        return redirect(route("/"))->with('success', 'Usuario actualizado satisfactoriamente');
    }
}
