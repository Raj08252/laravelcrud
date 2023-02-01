<?php

namespace App\Http\Controllers;

use App\Models\RajeevUser;
use Illuminate\Http\Request;

class UserController extends Controller
{
   public function addIndex()
   {
    return view('adduser');
   }
  public  function addData(Request $request)
   {
      $request->validate([
         'fname'=>'required|regex:/^[a-zA-Z]+$/|min:3|max:64',
         'lname'=>'required|regex:/^[a-zA-Z]+$/|min:3|max:64',
         'email'=>'required|email',
         'phone'=>'required|max:10|regex:/[0-9]{9}/'
       ]);
   //  dd($request->all());
   // RajeevUser::insert([
   //  'fname'=>$request['fname'],
   //  'lname'=>$request['lname'],
   //  'email'=>$request['email'],
   //  'phone'=>$request['phone']
   // ]);
   RajeevUser::create($request->all());
   return redirect('/');
   }
   public function viewUser()
   {
      $users=RajeevUser::all();
      return view('welcome',compact('users'));
   }
   public function updateIndex($id)
   {
      $user=RajeevUser::find($id);
      // return $users;
      return view ('edituser',compact('user'));
   }
   public function updateUser(Request $request)
   {
      $request->validate([
         'fname'=>'required|regex:/^[a-zA-Z]+$/|min:3|max:64',
         'lname'=>'required|regex:/^[a-zA-Z]+$/|min:3|max:64',
         'email'=>'required|email',
         'phone'=>'required|max:10|regex:/[0-9]{9}/'
       ]);
     $users=RajeevUser::find($request->id);
     $users->fname=$request->fname;
     $users->lname=$request->lname;
     $users->email=$request->email;
     $users->phone=$request->phone;
     $users->save();
     return redirect('/');
   }
   public function deleteUser($id)
   {
      RajeevUser::where('id',$id)->delete();
      return redirect('/');
   }
}