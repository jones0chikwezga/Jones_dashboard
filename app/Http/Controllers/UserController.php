<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;


class UserController extends Controller
{
    /**
     * Display a listing of the users
     *
     * @param  \App\Models\User  $model
     * @return \Illuminate\View\View
     */

   

    public function index()
    {
        $allusers = User::orderBy('id', 'DESC')->get();
        

        return view('admin.users.index')->with([
            'users' => $allusers,
            
        ]);
    }

    public function create(){
      
    }
    public function store(request $request){

       $request->validate([
            'fullname' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => ['required', 'string', 'min:8'],
            'phone'=>'required',
            'address'=>'required',
            'type'=>'required',
        ]);

  
        $data = User::create([
            'name' => $request->input('fullname'),
            'email'=>$request->input('email'),
            'phone'=>$request->input('phone'),
            'address'=>$request->input('address'),
            'type'=>$request->input('type'),
            'office_location'=> 'blantyre',
            'department'=>'administration',
            'password'=>Hash::make($request->input('password')),
         ]);    


      if($data){
         
         return redirect('user')->withStatus(__('User successfully Added.'));;
      }else{
        dd('failed');
      }


    }

    public function show($id){
        $user_details = User::find($id);

        // dd($user_details);
        return view('admin.users.show',['user_details'=>$user_details]);
    }

    public function update(Request $request, $id){


       $request->validate([
        'fullname' => 'required|string',
        'email' => 'required|email',
        // 'password' => ['min:8'],
        'phone'=>'required',
        'address'=>'required',
        // 'type'=>'required',
    ]);

if(empty($request->password)){
  $update = User::where('id',$id)
  ->update([
      'name' => $request->input('fullname'),
      'email'=>$request->input('email'),
      'phone'=>$request->input('phone'),
      'address'=>$request->input('address'),
      // 'type'=>$request->input('type'),
      // 'office_location'=> 'blantyre',
      // 'department'=>'administration',
      // 'password'=>Hash::make($request->input('password')),
   ]);    


if($update){
   
   return redirect('user/'.$id)->with('message','user Updated successfully');
}else{
  return redirect('user/'.$id)->with('message','failed to Update user');
}
}else{
  $update = User::where('id',$id)
  ->update([
      'name' => $request->input('fullname'),
      'email'=>$request->input('email'),
      'phone'=>$request->input('phone'),
      'address'=>$request->input('address'),
      // 'type'=>$request->input('type'),
      // 'office_location'=> 'blantyre',
      // 'department'=>'administration',
      'password'=>Hash::make($request->input('password')),
   ]);    


if($update){
   
   return redirect('user/'.$id)->with('message','user Updated successfully');
}else{
  return redirect('user/'.$id)->with('message','failed to Update user');
}
}





}

public function destroy($id)
{

      $userid = auth()->user()->id;

     if($userid == $id){
      return redirect('/user')->with('error','you can not delete your own account'); 
     }else{
      $user = User::find($id);
      $user -> delete();

      return redirect('/user')->with('message','user deleted successfully'); 
     }
       
    }
}
