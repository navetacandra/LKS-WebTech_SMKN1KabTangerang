<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class AuthController extends Controller
{
    public function login(){
        return view('auth.login');
    }

    public function register(){
        return view('auth.register');
    }


    public function loginL(Request  $request){

//        mengambil data
        $request->validate([
            'email' => 'nullable',
            'password' => 'nullable',
        ]);

        $checkuser = User::query()->where('email' ,  $request->input('email'))->first();

        if (!$checkuser){
            return redirect()->route('register')->withErrors(['error' => 'Akun anda belum terdaftar, mohon registrasi']);
        }

        $password = $request->input('password');

//        cek password
        $checkPassword = Hash::check($password , $checkuser->password);

        if (!$checkPassword){
            return redirect()->route('register')->withErrors(['error' => 'Pastikan password anda sama']);
        }

        DB::beginTransaction();

//       Membuat token
        $token = $checkuser->createToken('token_name')->plainTextToken;

        try {

            User::query()->where('email' ,  $request->input('email'))->update([
                'remember_token' =>  $token,
            ]);

//       Membuat status akun menjadi login
            auth()->login($checkuser);

            DB::commit();
            return redirect()->route('profile')->with(['success' => 'Berhasil membuat akun']);

        }catch (\Exception $e){
            DB::rollBack();
            Log::error($e);
            return redirect()->route('login')->withErrors(['error' => 'Terjadi kesalahan']);
        }
    }

    public function registerL(Request  $request){
//        meangambil data
        $request->validate([
            'email' => 'nullable',
            'name' => 'nullable',
            'phone_number' => 'nullable',
            'password' => 'nullable',
            'confirm_password' => 'nullable',
        ]);

        $checkuser = User::query()->where('email' ,  $request->input('email'))->first();

        if ($checkuser){
            return redirect()->route('register')->withErrors(['error' => 'Akun anda sudah terdaftar']);
        }

        $password = $request->input('password');

//       eMembuat Hash Password
        $pwHash = Hash::make($password);

        $checkPassword = Hash::check($request->input('confirm_password') , $pwHash);

        if (!$checkPassword){
            return redirect()->route('register')->withErrors(['error' => 'Pastikan password anda sama']);
        }



        DB::beginTransaction();

        try {

//            meambahkan User
            User::query()->where('email' ,  $request->input('email'))->insert([
               'email' =>   $request->input('email'),
               'name' =>   $request->input('name'),
               'phone_number' =>   $request->input('phone_number'),
               'password' =>   $pwHash,
               'balance' =>   0.0,
               'is_admin' =>   0,
            ]);

            DB::commit();
            return redirect()->route('login')->with(['success' => 'Berhasil membuat akun']);

        } catch (\Exception $e){
            DB::rollBack();
            dd($e);
            Log::error($e);
            return redirect()->route('register')->withErrors(['error' => 'Terjadi kesalahan']);
        }



    }

    public function logout(Request $request){


//        cek user apakah ada?
        $checkuser = $request->user();

//       Jika tidak akan merirdeerect ke profile
        if (!$checkuser){
            return redirect()->route('profile')->withErrors(['error' => 'Mohon login ter;ebih dahulu']);
        }

        DB::beginTransaction();

        try {

//       update remmeber tokem
            User::query()->where('id' , $checkuser->id)->update([
               'remember_token' => 'nothing',
            ]);

//       logout dari akun

            @auth()->logout();
            auth()->logout();

            DB::commit();

            return redirect()->route('login')->withErrors(['success' => 'Berhasil Logout']);

        } catch (\Exception $e){
            DB::rollBack();
            Log::error($e);
            return redirect()->route('profile')->withErrors(['error' => 'Terjadi kesalahan']);

        }

    }

}
