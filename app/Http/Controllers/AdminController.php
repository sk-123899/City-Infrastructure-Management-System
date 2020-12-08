<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function project(){
        if(Auth::user()->is_admin == 1){
        $id = array();
        $name = array();
        $city = array();
        $region = array();
        $project_type = array();
        $other_type = array();
        $area = array();
        $contact = array();
        $proof = array();
        $status = array();
        $i = 0;
        
        $data = DB::table('project')->select('*')->get();
        $count = DB::table('project')->select('*')->get()->count();
        foreach($data as $d){
            $id[$i] = $d->Projectid;
            $name[$i] = $d->fname;
            $city[$i] = $d->city;
            $region[$i] = $d->region;
            $project_type[$i] = $d->project_type;
            $other_type[$i] = $d->other_type;
            $area[$i] = $d->area;
            $contact[$i] = $d->contact;
            $proof[$i] = $d->proof;
            $status[$i] = $d->status;
            $i++;
        }
        return View('admin_project')->with('count',$count)->with('id',$id)->with('name',$name)->with('city',$city)->with('region',$region)->with('project_type',$project_type)->with('other_type',$other_type)->with('area',$area)->with('contact',$contact)->with('proof',$proof)->with('status',$status); 
    }    
    else{
        return redirect()->route('dashboard');
    }
    }    
        
    public function ghome(){
        if(Auth::user()->is_admin == 1){
            $comment = array();
            $names = array();
            $id = array();
            $gid = array();
            $grievance = array();
            $ward = array();
            $landmark = array();
            $location = array();
            $pincode  = array();
            $details = array();
            $status = array();
            $i = 0 ;


            $data = DB::table('ghome')->select('*')->get();
            $count = DB::table('ghome')->select('*')->get()->count();
            foreach($data as $d){
                $id[$i] = $d->id;
                $gid[$i] = $d->gid;
                $grievance[$i] = $d->grievance;
                $ward[$i] = $d->ward;
                $landmark[$i] = $d->landmark;
                $location[$i] = $d->location;
                $pincode[$i] = $d->pincode;
                $details[$i] = $d->details;
                $status[$i] = $d->status;
                $comment[$i] = $d->comment;
                $i++;
            }
            $j=0;
            foreach($id as $i){
                $name = DB::table('users')->select('name')->where('id','=',$i)->get();
                foreach($name as $n){
                    $n = $n->name;
                }
                $names[$j] =$n; 
                $j++;                
            }
            return View('admin_grievances')->with('count',$count)->with('gid',$gid)->with('names',$names)->with('grievance',$grievance)->with('ward',$ward)->with('landmark',$landmark)->with('location',$location)->with('pincode',$pincode)->with('details',$details)->with('status',$status)->with('comment',$comment); 
        }
        else{
            return redirect()->route('dashboard');
        }
    }

    public function project1(){
        $uid = Auth::user()->id;
        $comment = array();
        $id = array();
        $name = array();
        $city = array();
        $region = array();
        $project_type = array();
        $other_type = array();
        $area = array();
        $contact = array();
        $proof = array();
        $status_p = array();

        $gid = array();
        $grievance = array();
        $ward = array();
        $landmark = array();
        $location = array();
        $pincode  = array();
        $details = array();
        $status_g = array();
        $i = 0 ;

        
        $data = DB::table('project')->select('*')->where('id','=',$uid)->get();
        $count_p = DB::table('project')->select('*')->where('id','=',$uid)->get()->count();
        foreach($data as $d){
            $id[$i] = $d->Projectid;
            $name[$i] = $d->fname;
            $city[$i] = $d->city;
            $region[$i] = $d->region;
            $project_type[$i] = $d->project_type;
            $other_type[$i] = $d->other_type;
            $area[$i] = $d->area;
            $contact[$i] = $d->contact;
            $proof[$i] = $d->proof;
            $status_p[$i] = $d->status;
            $i++;
        }
        $i=0;
        $data = DB::table('ghome')->select('*')->where('id','=',$uid)->get();
        $count_g = DB::table('ghome')->select('*')->where('id','=',$uid)->get()->count();
        foreach($data as $d){
            $gid[$i] = $d->gid;
            $grievance[$i] = $d->grievance;
            $ward[$i] = $d->ward;
            $landmark[$i] = $d->landmark;
            $location[$i] = $d->location;
            $pincode[$i] = $d->pincode;
            $details[$i] = $d->details;
            $comment[$i] = $d->comment;
            $status_g[$i] = $d->status;
            $i++;
        }
        return View('user_status')->with('count_p',$count_p)->with('id',$id)->with('name',$name)->with('city',$city)->with('region',$region)->with('project_type',$project_type)->with('other_type',$other_type)->with('area',$area)->with('contact',$contact)->with('proof',$proof)->with('status_p',$status_p)->with('count_g',$count_g)->with('gid',$gid)->with('grievance',$grievance)->with('ward',$ward)->with('landmark',$landmark)->with('location',$location)->with('pincode',$pincode)->with('details',$details)->with('status_g',$status_g)->with('comment',$comment);  
        
    }    

    

    public function reject(Request $request ){
        $pid = $request->pid;
        DB::update('update project set status = 2 where Projectid = ?',array($pid));
        return redirect()->route('admin');
    }

    public function accept(Request $request ){
        $pid = $request->pid;
        DB::update('update project set status = 1 where Projectid = ?',array($pid));
        return redirect()->route('admin');
    }
    
    public function send(Request $request ){
        $gid = $request->gid;
        DB::update('update ghome set status = 1 where gid = ?',array($gid));
        return redirect()->route('admin_grievances');
    }
    public function answer(Request $request ){
        $gid = $request->gid;
        $comment = $request->comment;
        DB::update('update ghome set status = 2, comment=? where gid = ?',array($comment,$gid));
        return redirect()->route('admin_grievances');
    }
    
    
}

