<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\User;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\RoleSet;


class RolesController extends Controller
{
    public function index()
    {
        return view('admin.role-setting')->with(['roles' => Role::all()]);
    }

    public function store(RoleSet $request)
    {
        $request->validated();

        $role = new Role;
        $role->name = $request->name;
        $role->slug = $request->slug;
        $role->save();

        flash()->success('Success', 'New User Role has been created successfully !');

        return redirect()->route('role_setting.index')->with('success');
    }

    // public function edit($id)
    // {
    //     $role = Role::find($id);

    // }

    public function update(RoleSet $request, $id)
    {

        $request->validated();
        $role = Role::find($id);

        $role->name = $request->input('name');
        $role->slug = $request->input('slug');
        $role->save();

        flash()->success('Success', 'Role has been Updated successfully !');

        return redirect()->route('role_setting.index')->with('success');
    }

    public function destroy($id)
    {
        $role = Role::find($id);
        $role->delete();
        flash()->success('Success', 'role Record has been Deleted successfully !');
        return redirect()->route('role_setting.index')->with('success');
    }
}
