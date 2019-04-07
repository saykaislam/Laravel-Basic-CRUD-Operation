<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
use Session;
session_start();

class AdminController extends Controller
{
    public function addcontact(){
    	return view('addcontact');
    }

    public function allcontact(){
    	$all_contact_info=DB::table('tbl_contact')
    	        ->get();
    	$manage_contact=view('allcontact')
    	        ->with('all_contact_info',$all_contact_info);
    	return view('layout')
    	        ->with('allcontact',$manage_contact);
    }

    public function dashboard(){
    	return view('welcome');
    }

      public function save_contact(Request $request)
      {
        $data = array();
        $data['contact_name']=$request->contact_name;
        $data['contact_number']=$request->contact_number;
        DB::table('tbl_contact')->insert($data);
        Session::put('message','Contact Added Succesfully!!');
        return Redirect::to('/addcontact');
      }
       public function delete_contact($contact_id){
    	DB::table('tbl_contact')
    	      ->where('contact_id',$contact_id)
    	      ->delete();
    	Session::put('message','Contact Deleted Succesfully!!');
        return Redirect::to('/allcontact');
    }

    public function edit_contact($contact_id){
    	$contact_info=DB::table('tbl_contact')
    	      ->where('contact_id',$contact_id)
    	      ->first();
        $manage_contact=view('contact_edit')
    	        ->with('all_contact_info',$contact_info);
    	return view('layout')
    	        ->with('contact_edit',$manage_contact);
    }
    

    public function contact_update(Request $request,$contact_id){
    	  $data = array();
        $data['contact_name']=$request->contact_name;
        $data['contact_number']=$request->contact_number;
        DB::table('tbl_contact')
               ->where('contact_id',$contact_id)
               ->update($data);
        Session::put('message','Contact Updated Succesfully!!');
        return Redirect::to('/allcontact');
    }


}
