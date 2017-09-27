<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\User;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('admin.users.index')->with('users', $users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in    storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'email'    => 'required|string|max:255|email|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ];

        $this->validate($request, $rules);

        $email    = $request->input('email');
        $passowrd = bcrypt($request->input('password'));
        $avatar   = 'genu.jpg';
        
        $user = User::create([
            'email'    => $email,
            'password' => $passowrd,
            'avatar'   => $avatar
        ]);

        $user->save();
        return redirect()->route('users.index')->with('success', 'User has been created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        return view('admin.users.show')->with('user', $user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('admin.users.edit')->with('user', $user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        if($request->has('name')) {
            $this->validate($request, [
                'name' => 'string|regex:/^[a-zA-Z ]+$/|min:3'
            ]);
            $user->name = $request->name;
        }

        if($request->has('gender')) {
            $this->validate($request, [
                'gender' => 'string|regex:/^[a-zA-Z]+$/|min:3'
            ]);
            $user->gender = $request->gender;
        }

        if($request->has('confirmed')) {
            $this->validate($request, [
                'confirmed' => 'integer'
            ]);
            $user->confirmed = $request->confirmed;
        }

        if($request->has('status')) {
            $this->validate($request, [
                'status' => 'integer'
            ]);
            $user->status = $request->status;
        }

        if($request->has('email') && $user->email != $request->has('email')) {
            $this->validate($request, [
                'email' => 'string|email|unique:users|max:255'
            ]);
            $user->email = $request->email;
        }

        if($request->has('password')) {
            $this->validate($request, [
                'password' => 'string|min:6|confirmed'
            ]);
            $user->password  = bcrypt($request->password);
        }

        if($request->hasFile('avatar')) {
            $img          = $request->file('avatar');
            $ext          = $img->getClientOriginalExtension();
            $imgName      = time() . '.' . $ext;
            Storage::putFileAs('public/avatars', $img, $imgName);
            $oldFile      = $user->avatar;
            $user->avatar = $imgName;
            Storage::delete($oldFile);
        }

        $user->save();
        return redirect()->route('users.index')->with('success', 'User edited successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);

        $user->delete();
        return redirect()->route('users.index')->with('success', 'User has been deleted.');
    }
}
