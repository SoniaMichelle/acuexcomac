<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PerfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    /* public function index()
    {
        return view('perfil.index');
    } */
    public function newPassword(){
        return view('perfil.index');
    }
    public function changePassword(Request $request){    
        
        $user           = Auth::user();
        $userId         = $user->id;
        $email      = $user->email;
        $userPassword   = $user->password;

        

        if($request->password_actual !=""){
            $NuewPass   = $request->password;
            $confirPass = $request->confirm_password;
            $email       = $request->email;

           /*  $email       = $request->email;
            $sqlBDUpdateName = DB::table('users')
                            ->where('id', $user->id)
                            ->update(['email' => $email]); */
           /*  return redirect()->back()->with('name','ok');; */
                //Verifico si la clave actual es igual a la clave del usuario en session
                if (Hash::check($request->password_actual, $userPassword)) {
                    //Valido que tanto la 1 como 2 clave sean iguales
                    if($NuewPass == $confirPass){
                        //Valido que la clave no sea Menor a 6 digitos
                        if(strlen($NuewPass) >= 6){
                            $user->password = Hash::make($request->password);
                            $sqlBD = DB::table('users')
                                  ->where('id', $user->id)
                                  ->update(['password' => $user->password], ['email' => $user->email]);
                    
                            return redirect()->route('login')->with('nuevo','ok');
                            /* return redirect()->back()->with('nuevo','ok'); */
                        }else{
                            return redirect()->back()->with('menor','limite');
                        }
        
                }else{
                    return redirect()->back()->with('claveIncorrecta','mal');
                }
           
            }else{
                return back()->withErrors(['password_actual'=>'La contraseña no Coinciden']);
            }

        }else{
            $email       = $request->email;
            $sqlBDUpdateName = DB::table('users')
                            ->where('id', $user->id)
                            ->update(['email' => $email]);
            return redirect()->back()->with('name','ok');;
        }
    }
}
