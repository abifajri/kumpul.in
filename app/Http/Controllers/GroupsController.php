<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
Use App\Models\Group;
Use App\Models\GroupMember;
Use App\Models\User;


class GroupsController extends Controller
{
    public function index($id){
        try {
            $group = Group::find($id);
            $members = Group::find($id)->users()->get();
            return view('groups.index')->with('data', [$group, $members]);
        } catch (\Throwable $th) {
            return redirect()->route('timeline');
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
            'name' => 'required|max:255',
            'password' => 'nullable|confirmed',
            'add_members' => 'nullable',
            'group_description' => 'nullable',
        ]);

        $group = new Group;
        $group->name = $data['name'];
        $group->password = Hash::make($data['password']);
        $group->description = $data['group_description'];
        $group->save();

        $group_owner = new GroupMember;
        $group_owner->group_id = $group->id;
        $group_owner->user_id = Auth::id();
        $group_owner->role = 1;
        $group_owner->save();

        $members_array = explode(',', $data['add_members']);
        foreach ($members_array as $temp_member){
            $get_member = User::where('username', $temp_member)->first();

            if($get_member != null){
                $member = new GroupMember;
                $member->group_id = $group->id;
                $member->user_id = $get_member->id;
                $member->save();
            }
        }

        return redirect()->route('groups.index', ['group' => $group]);
    }
}
