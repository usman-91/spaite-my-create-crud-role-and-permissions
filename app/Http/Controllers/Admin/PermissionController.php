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

class PermissionController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:permission-list|permission-create|permission-edit|permission-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:permission-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:permission-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:permission-delete', ['only' => ['destroy']]);
    }

    public function index(Request $request)
    {
        $title = "Permission";
        $permissions = Permission::all();
        return view('admin.permission.index', compact('title', 'permissions'));
    }

    public function create(Request $request)
    {
        $title = "Permission Create";
        return view('admin.permission.create', compact('title'));
    }
    public function store(Request $request)
    {
        // dd($request->all());
        $this->validate($request, [
            'name' => 'required|unique:permissions',
        ]);
        $permission = Permission::create(['name' => $request->input('name'), 'guard_name' => 'web']);

        if ($permission) {
            return Redirect::to(route('permission'))->with('message', 'Success! Save Successfully Permission');
        } else {
            return Redirect::to(route('permission.create'))->with('message', "Don't Save Permission");
        }
    }
    public function edit(Request $request,$id)
    {
        $title = "Permission Update";
        $permission = Permission::find($id);
        return view('admin.permission.edit', compact('title', 'permission'));
    }
    public function update(Request $request,$id)
    {
        // dd($request->all());
        $this->validate($request, [
            'name' => 'required',Rule::unique('permissions')->ignore($id),
        ]);

        $permission = Permission::find($id);
        $permission->name = $request->input('name');
        $permission->save();
        $permission->syncPermissions($request->input('permission'));   
        if($permission){
            return redirect()->route('permission')->with('message','Permission updated successfully');
        }else{
            return redirect()->route('permission.edit',$id)->with('message','Permission Not updated');
        }
    }
    public function destroy(Request $request,$id)
    {
        // dd($request->id);
        Permission::where('id',$id)->delete();
        return redirect()->route('permission')->with('success','Role deleted successfully');
    }
}
