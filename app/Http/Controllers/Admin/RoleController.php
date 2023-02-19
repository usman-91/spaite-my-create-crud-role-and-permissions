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
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class RoleController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:role-list|role-create|role-edit|role-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:role-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:role-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:role-delete', ['only' => ['destroy']]);
    }

    public function index(Request $request)
    {
        $title = "Roles";
        // $roles = Role::WhereNotin('name',['admin'])->orderBy('id','DESC')->get();
        $roles = Role::all();
        return view('admin.roles.index', compact('title', 'roles'));
    }

    public function create(Request $request)
    {
        $title = "Roles Create";
        $permissions = Permission::all();
        return view('admin.roles.create', compact('title','permissions'));
    }
    public function store(Request $request)
    {
        // dd($request->all());
        $this->validate($request, [
            'name' => 'required|unique:roles,name',
            'permission' => 'required',
        ]);
        $role = Role::create(['name' => $request->input('name')]);
        $role->syncPermissions($request->input('permission'));  
        if ($role) {
            return Redirect::to(route('role'))->with('message', 'Success! Role Save Successfully Permission');
        } else {
            return Redirect::to(route('role.create'))->with('message', "Don't Save Role & Permission");
        }
    }

    public function edit(Request $request,$id)
    {
        $title = "Roles Update";
        $role = Role::find($id);
        $permissions = Permission::all();
        $rolePermissions = DB::table("role_has_permissions")->where("role_has_permissions.role_id",$id)
        ->pluck('role_has_permissions.permission_id','role_has_permissions.permission_id')
        ->all(); 

        return view('admin.roles.edit',compact('role','permissions','rolePermissions','title'));
    }   


    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'permission' => 'required',
        ]);
    
        $role = Role::find($id);
        $role->name = $request->input('name');
        $role->save();
        $role->syncPermissions($request->input('permission'));

        if ($role) {
            return Redirect::to(route('role'))->with('message', 'Success! Role updated successfully');
        } else {
            return Redirect::to(route('role.edit'))->with('message', "Don't Update Role & Permission");
        }
      
    }

    public function destroy(Request $request,$id)
    {
        Role::where('id',$id)->delete();
        return redirect()->route('role')->with('success','Role deleted successfully');
    }

}
