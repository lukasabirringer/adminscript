<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use DB;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.users.index', ['users' => $users]);
    }
    public function store(Request $request)
      {
        
        DB::table('users')->insert(
            ['name' => $request->userName,'email' => $request->userEmail,'role' => $request->userRole, 'password' => bcrypt($request->userPass),]
        );
    
        return redirect('/admin/users');
      }

    public function create()
      {
        return view('admin.users.create');
      }
    	public function show($id)
	 		{
 				$user = User::findOrFail($id);
				return view('admin.users.update', compact('user'));  
    	}
    	public function update(Request $request, $id)
    {
			$name = $request->input('userName');
    	$email = $request->input('userEmail');
      $role = $request->input('userRole');

      $user = User::find($id);
			$user->name = $name;
			$user->email = $email;
			$user->role = $role;
			$user->save();

      return redirect('/admin/users');
    }
    public function destroy($id)
    {
      $user = User::findOrFail($id);
      $user->delete();
      return redirect('/admin/users');
    }
}
