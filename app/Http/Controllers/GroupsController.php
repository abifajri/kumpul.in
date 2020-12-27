<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Support\Facade\Auth;
use Illuminate\Support\Facades\Hash;
Use App\Models\Group;
Use App\Models\GroupMember;


class GroupsController extends Controller
{
    public function index($id){
        try {
            $group = Group::find($id);
            //$members = GroupMember::
            return view('groups.index')->with('group', $group);
        } catch (\Throwable $th) {
            return redirect()->route('home');
        }
    }

    public function create(){
        if(Auth::check()){
            return view('groups.create');
        }
        return redirect()->route('login');
    }

    public function store(Request $request){
        $data = $request->validate([
            'group_name' => 'required|unique:groups|max:255',
            'password' => 'nullable|confirmed',
            'add_members' => 'nullable',
            'group_description' => 'nullable',
        ]);

        $group = new Group;
        $group->name = $data['group_name'];
        $group->password = Hash::make($data['password']);
        $group->description = $data['group_description'];
        $group->save;

        $group_member = new GroupMember;
        $group_member->group_id = $group->id;
        $group_member->user_id = Auth::id();
        $group_member->role = 1;
        $group_member->save();

        return redirect()->route('groups.index', ['group' => $group]);
    }
}
