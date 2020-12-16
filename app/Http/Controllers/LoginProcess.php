<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginProcess extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $user = $request->get("user");
        $pass = $request->get("pass");

     

        // age user ya pass vared nashode bod: 
        if(empty ($user) ||empty ($pass) ){
          return  redirect()->route("loginIndex")->with("error", "User or password must not be empty");
        }

        // gerefte data az db:
        $res = DB::select('select * from users where user = :id and pass = :pass' , [$user, $pass]);

        // age user ya pass vojod nadasht:
        if (count($res) == 0){
          return  redirect()->route("loginIndex")->with("error", "User or password is wrong");
        }

        DB::insert('insert into activeSession (user) values (?)', [$user]);

        if($res[0]->role == 1){
            session(['role'=>1]);
           return view("panel.admin.index", ["res"=>$res]);           
        }

        $request->session()->put("role", 0);
       return view("panel.user.index", ["res"=>$res]);

            
    }
}
