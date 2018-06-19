<?php

namespace App\Http\Controllers\AndroidApi;

use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Auth_table;
use App\Fonction;
use App\Models\Etud_realise_activ;
use Illuminate\Foundation\Testing\HttpException;
use PHPUnit\Runner\Exception;
use Illuminate\Http\Response;

class AuthController extends Controller
{
    public function verifierEmail(Request $request){
        $login = DB::select("SELECT COUNT(id) FROM users WHERE email = '".$request->email."'");
        $status = $login[0]->count;
        //echo $code;
        return Response()->json(compact('status'));
    }

    public function login(Request $request)
    {
        $email = $request->email;
        $password = $request->password;

        if(Auth::attempt(['email'=>$email, 'password'=>$password])){
            $nom = Auth::user()->name;
            $prenom = Auth::user()->prenom;
            $sexe = Auth::user()->sexe;
            $photo = Auth::user()->photo;
            $id = Auth::user()->id;
            $idActivity = 10;

            if(\Auth::user()->hasRole('admin')){
                $role = "admin";
                $status = 1;
            }
            if(\Auth::user()->hasRole('enseignant')){
                $role = "enseignant";
                $status = 2;
            }
            if(\Auth::user()->hasRole('etudiant')) {
                $role = "etudiant";
                $status = 3;
            }
            if(\Auth::user()->hasRole('surveillant')){
                $role = "surveillant";
                $status = 4;
            }
            if(\Auth::user()->hasRole('visiteur')){
                $role = "visiteur";
                $status = 5;
            }
        }else{
            $status = 0;
        }
        //dd(compact('status','id','nom','prenom','sexe','role','photo'));
        return response()->json(compact('status','id','nom','prenom','sexe','role','idActivity','photo'));
        //return response()->json($status,$id,$nom,$prenom,$exe,$role,$photo);
        /*$user = DB::select('
            SELECT
              users.name AS nom,
              users.prenom,
              users.sexe,
              roles.name AS role,
              users.photo
            FROM
              users,
              role_user,
              roles
            WHERE
              role_user.user_id = users.id AND
              role_user.role_id = roles.id AND
              roles.name != \'etudiant\' AND
              roles.name != \'visiteur\' AND
              users.email = \''.$login.'\' AND
              users.password = \''.$pass.'\'
        ');*/
    }

    public function register(Request $request){

    }

    public function resetPass(Request $request){

    }


}
