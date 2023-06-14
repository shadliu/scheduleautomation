<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Plusemon\Notify\Facades\Notify;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class UserProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['profile'] = User::find(Auth::user()->id)->first();
        return view('dashboard.profiles.profile', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $data['profile'] = User::find(Auth::user()->id);
        return view('dashboard.profiles.profile_edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'phone' => 'required|unique:users,phone,' . Auth::user()->id,
            'email' => 'required|email|unique:users,email,' . Auth::user()->id,
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        } else {

            $admin = User::find(Auth::user()->id);

            $admin->name    = $request->name;
            $admin->email   = $request->email;
            $admin->phone  = $request->phone;



            $profile_photo = $request->profile_photo;
            if ($profile_photo) {
                $uniqname   = uniqid();
                $ext        = strtolower($profile_photo->getClientOriginalExtension());
                $filepath   = 'assets/img/users';
                $imagename  = $uniqname . '.' . $ext;
                $profile_photo->move($filepath, $imagename);
                $admin->profile_photo = $imagename;
            }
            $admin->save();
            Notify::success('Profile Updated', 'Success');
            return redirect()->route('user.profile');
        }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function setting()
    {
        return view('dashboard.profiles.setting');
    }

    public function changepassword(Request $request)
    {
        $this->validate($request, [
            'current_password'  => 'required',
            'new_password'      => 'min:6|required_with:password_confirmation|same:password_confirmation',
            'password_confirmation' => 'min:6'
        ]);
        if (Auth::attempt(['id' => Auth::user()->id, 'password' => $request->current_password])) {
            $user = User::find(Auth::user()->id);
            $user->password = bcrypt($request->new_password);
            $user->save();
            Notify::success('Successfully password changed.', 'Success');
            return redirect()->route('user.profile');
        } else {
            Notify::error('Sorry! Your current password do not match.', ' Error');
            return redirect()->back();
        }
    }
}
