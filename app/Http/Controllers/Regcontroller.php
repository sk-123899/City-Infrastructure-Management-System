<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Session\Session;
use Illuminate\Contracts\Session\Session as SessionAlias;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class Regcontroller extends Controller
{
    public function index(Request $request){
        $name = $request->Name;
        $email = $request->email;
        $password = $request->password;
        DB::insert("INSERT INTO registration (name,email,password) VALUES(?,?,?)", array($name, $email,$password));
        return View('dashboard')->with('name',$name);
    }

    public function project(Request $request){
        $fname = $request->fname;
        $lname = $request->lname;
        $city = $request->city;
        $state = $request->state;
        $region = $request->region;
        $project_type = $request->purpose;
        $other_type = $request->other;
        $area = $request->area;
        $contact = $request->mob;
        $proof = $request->file;
        $id = Auth::user()->id;
        
        DB::insert("INSERT INTO project (fname,lname,city,state,region,project_type,other_type,area,contact,proof,id) VALUES(?,?,?,?,?,?,?,?,?,?,?)", array($fname,$lname,$city,$state,$region,$project_type,$other_type,$area, $contact,$proof,$id));

        return View('dashboard');     
                
    }
    public function ghome(Request $request){
        $grievance = $request->grievance;
        $ward = $request->ward;
        $landmark = $request->Lmark;
        $location = $request->Loc;
        $pincode = $request->Pin;
        $details = $request->Gdetail;
        
        $id = DB::table('users')->select('id')->where('email','=',Auth::user()->email)->get();
        foreach($id as $i){
            $id = $i->id;
        }

        DB::insert("INSERT INTO ghome (grievance,ward,landmark,location,pincode,details,id) VALUES(?,?,?,?,?,?,?)", array($grievance,$ward,$landmark,$location,$pincode,$details,$id));
        
        return View('dashboard');     
    
    }


}
