<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class AppController extends Controller
{
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function init() {
        $user = Auth::user();
        $medeci = Auth::medecin();

        return response()->json($user, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request){
        if(Auth::attempt(['email'=> $request->email, 'password' => $request->password], true)){
            return response()->json(Auth::user(), 200);
        }
        else{
            return response()()->json(['error'=> 'vous ne pouvez pas vous conneté'], 401);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request){

        $user = User::where('telephone', $request->telephone)->first();
        if(isset($user->id)) 
        {
            return response()->json(['error' => ' Ce telephone existe déja'], 401);
        }
        $user = User::where('email', $request->email)->first();
        if(isset($user->id)) 
        {
            return response()->json(['error' => ' Cet email existe déja'], 401);
        }
       
        

        $user = new User();
        $user->name = $request->name;
        $user->telephone = $request->telephone;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->profession = $request->profession;
        $user->avatar = $request->avatar;
        $user->save();

      
        return response()->json($user, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function logout(){
        Auth::logout();
    }
}
