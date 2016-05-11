<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;

class AdminController extends Controller
{
    //
    public function postSignIn(Request $request)
    {
      # code...
        $this->validate($request, [
            'uname' => 'required|max:100',
            'pasw' => 'required|max:100'
        ]);

        if (!Auth::attempt(['username' => $request['uname'] , 'password' => $request['pasw'], 'permissions' => 'admin'])) {
            # code...
            alert()->error('Username atau Password Salah', 'Error');
            return redirect()->back();
        }
        alert()->success('Anda Berhasil Login', 'Success');
        return redirect('/usr');
    }

    public function Logout()
    {
      Auth::logout();
      alert()->success('Anda Berhasil Logout', 'Success');
      return redirect('/login');
    }
}
