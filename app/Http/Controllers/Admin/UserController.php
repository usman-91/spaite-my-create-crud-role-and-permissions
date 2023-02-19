<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\DB;  
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Arr;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{

    function __construct()
    {
         $this->middleware('permission:user-list|user-create|user-edit|user-delete', ['only' => ['index','show']]);
         $this->middleware('permission:user-create', ['only' => ['create','store']]);
         $this->middleware('permission:user-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:user-delete', ['only' => ['destroy']]);
    }


    public function index(Request $request){
        $title = "Users";
        $users = User::all();
        return view('admin.users.index', compact('title','users'));
    }

    public function create(){
        $title = "User Create";
        $roles = Role::all();
        return view('admin.users.create', compact('title','roles'));
    }
      
    public function store(Request $request){
    //    dd($request->all());
       $this->validate($request, [
        'name' => 'required',
        'email' => 'required|email|unique:users,email',
        'password' => 'required',
        'role' => 'required'
    ]);   
    $input = $request->all();
   if($file=$request->file('image')){
        $filename = time().$file->getClientOriginalName();
        $file->move(public_path('assets/user_image'), $filename);
        $input['image'] =  $filename;
   }
    $input['password'] = Hash::make($input['password']); 
    $input['status'] =  $request->input('status');  
    $input['phone'] =  $request->input('phone');
    // dd($input);
    $user = User::create($input);
    $user->assignRole($request->input('role'));    
    if ($user) {
        return Redirect::to(route('users'))->with('message', 'Success! User Added successfully');
    } else {
        return Redirect::to(route('user.create'))->with('message', "User Don't Added");
    }
    } 

    public function edit(Request $request,$id){
        // dd($request->all());
        $title = "User Update";
        $user = User::find($id);
        $roles = Role::all();
        $userRole = $user->roles->all();    
    //  dd($userRole);
        return view('admin.users.edit',compact('user','roles','userRole','title'));
     } 

     public function update(Request $request,$id){
        // dd($request->all());
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',Rule::unique('users')->ignore($id),
            'role' => 'required'
        ]);   
        $input = $request->all();
        $user = User::where('id',$id)->get();
        if($file=$request->file('image')){
            foreach ($user as  $ccnt) {
               $image_get = $ccnt['image']; 

            }
            $filename = time().$file->getClientOriginalName();
            $file->move(public_path('assets/user_image'), $filename);
            $imagePath = public_path('assets/user_image');
            // unlink($imagePath.$image_get);
            $input['image'] =  $filename;
       }

        if(!empty($input['password'])){ 
            $input['password'] = Hash::make($input['password']);
        }else{
            $input = Arr::except($input,array('password'));
        }
        $user = User::find($id);
        $user->update($input);
        DB::table('model_has_roles')->where('model_id',$id)->delete();
        $user->assignRole($request->input('role'));
        if ($user) {
            return Redirect::to(route('users'))->with('message', 'Success! User Update successfully');
        } else {
            return Redirect::to(route('user.create'))->with('message', "User Don't Update");
        }
     } 
}
