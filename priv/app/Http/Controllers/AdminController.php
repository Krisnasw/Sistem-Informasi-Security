<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;
use App\User;
use Illuminate\Support\Facades\Input;
use Validator;
use Hash;
use App\Bug;

class AdminController extends Controller
{
    //
    public function postSignIn(Request $request)
    {
      # code...
        $this->validate($request, [
            'uname' => 'required|max:30',
            'pasw' => 'required|max:30'
        ]);

        if (!Auth::attempt(['username' => $request['uname'] , 'password' => $request['pasw'] ])) {
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
    
    public function Register()
    {
        $validator = Validator::make(
            Input::all(), array(
                'nama' => 'required|max:30',
                'user' => 'required|max:30',
                'omah' => 'required|max:100',
                'paswot' => 'required|max:30',
                'kota' => 'required',
                'prov' => 'required',
                'pos' => 'required',
                'email' => 'required',
                'telp' => 'required'
            )
        );
        
        if ($validator->passes())
        {
            $user = new User();
            $user->nama = Input::get('nama');
            $user->username = Input::get('user');
            $user->alamat = Input::get('omah');
            $user->password = Hash::make(Input::get('password'));
            $user->kota = Input::get('kota');
            $user->provinsi = Input::get('prov');
            $user->pos = Input::get('pos');
            $user->email = Input::get('email');
            $user->nohp = Input::get('telp');
            $user->save();
            
            alert()->success('Register Telah Sukses', 'Sukses');
            return redirect('/login');
        } else {
            alert()->error('Register Gagal, Cek Data Anda', 'Error');
            return redirect('/login');
        }
    }
    
    public function Bugs()
    {
        $validator = Validator::make(
            Input::all(), array(
                'jeneng' => 'required|max:30',
                'mail' => 'required|max:30',
                'pil' => 'required|max:100',
                'brow' => 'required|max:30',
                'isu' => 'required',
                'ket' => 'required'
            )
        );
        
        if ($validator->passes())
        {
            $user = new Bug();
            $user->nama = Input::get('jeneng');
            $user->os = Input::get('pil');
            $user->browser = Input::get('brow');
            $user->email = Input::get('mail');
            $user->isu = Input::get('isu');
            $user->keterangan = Input::get('ket');
            $user->save();
            
            alert()->success('Terimakasih Telah Melaporkan Bug', 'Sukses');
            return redirect('/login');
        } else {
            alert()->error('Maaf, Mohon Diisi Dengan Benar', 'Error');
            return redirect('/login');
        }
    }
}
