<?php

namespace Modules\Account\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use App\User;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function getLogin()
    {
        return view('account::login');
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function getregister()
    {
        return view('account::register');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function postLogin(Request $request)
    {
        $attempts = [
            'email' => $request->email,
            'password'   => $request->password,
        ];

        if(\Auth::attempt($attempts)){
            if(\Auth::user()->user_type == 'superadmin'){
                return redirect()->route('admin.home');
        }
            elseif(\Auth::user()->user_type == 'member'){
                return redirect()->route('member.home');
        }
    }
        return "password salah";
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function postRegister(Request $request)
    {

        $request->validate([
            'name' => 'required|min:3|max:50',
            'email' => 'email',
            'password' => 'required|confirmed|min:6',
        ]);

        $unique_username = uniqid();
        $create = User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => bcrypt($request->password),
        'username' => strtolower(str_replace(' ', '', $request->name . $unique_username)),
        'user_type' => 'superadmin',
        ]);
        return redirect()->route('get.login')->with('success', 'Pendaftaran Berhasil, Silahkan Login disini');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        return view('account::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
