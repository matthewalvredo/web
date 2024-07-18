<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
  public function index()
  {
    $users = User::all();
    return view('users', compact('users'));
  }

  public function createuser(Request $request)
  {
    return view('adduser');
  }

  public function store(Request $request)
  {
    $request->validate([
      'name' => 'required',
      'email' => 'required|email|unique:users',
      'password' => 'required',
      'role' => 'required',
    ]);

    $user = new User();
    $user->name = $request->name;
    $user->email = $request->email;
    $user->password = bcrypt($request->password);
    $user->role = $request->role;
    $user->save();

    return redirect()->route('users')->with('success', 'User created successfully');
  }

  public function edituser(Request $request)
  {

    $query = $request->getQueryString();

    $id = $query;
    $user = User::find($id);

    return view('edituser', compact('user'));
  }

  public function update(Request $request, $id)
  {
    $user = User::find($id);
    $user->name = $request->name;
    $user->email = $request->email;
    if ($request->password) {
      $user->password = bcrypt($request->password);
    }
    $user->role = $request->role;
    $user->save();

    return redirect()->route('users')->with('success', 'User updated successfully');
  }

  public function destroy($id)
  {
    $user = User::find($id);
    $user->delete();

    return redirect()->route('users')->with('success', 'User deleted successfully');
  }
}
