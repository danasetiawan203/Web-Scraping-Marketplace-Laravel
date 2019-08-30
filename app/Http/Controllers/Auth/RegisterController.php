<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Model\scraping;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'nama' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email',
            'password' => 'required|string|min:6|confirmed',
            'pekerjaan' => 'required',
            'alamat' => 'required',
            'id_prov' => 'numeric',
            'id_kab' => 'numeric',
            'no_identitas' => 'numeric|digits_between:2,20',
            'pekerjaan' => 'required',
            'no_hp' => 'numeric|digits_between:2,13',
            'lat' => 'required',
            'long' => 'required',
            
        ],[
            
            'nama.required' => 'Nama harus diisi tidak boleh kosong.',
            'email.required' => 'Email harus diisi tidak boleh kosong.',
            'password.required' => 'Password harus diisi tidak boleh kosong.',
            'no_identitas.numeric' => 'No identitas harus diisi tidak boleh kosong',
            'tanggal_lahir.required' => 'Tanggal lahir harus diisi tidak boleh kosong',
            'no_hp.numeric' => 'No HP harus diisi tidak boleh kosong',
            'alamat.required' => 'Alamat harus diisi tidak boleh kosong',
            'pekerjaan.required' => 'Pekerjaan harus diisi tidak boleh kosong',
            // 'tanggal_lahir.required' => 'Tanggal lahir harus diisi tidak boleh kosong',
            'id_prov.numeric' => 'Provinsi harus diisi tidak boleh kosong',
            'id_kab.numeric' => 'Kabupaten harus diisi tidak boleh kosong',
            // 'tanggal_lahir.required' => 'tanggal lahir harus diisi tidak boleh kosong',
            'lat.required' => 'Latitude harus diisi tidak boleh kosong',
            'long.required' => 'Longitude harus diisi tidak boleh kosong',
            'min:6' => 'masukkan password anda minimal 6.',
            'confirmed' => 'Anda Lupa Memasukkan Konfrimasi password anda.',
            'digits_between:2,20' =>'Anda Menginput no identitas lebih dari 20',
            'digits_between:2,13' =>'Anda Menginput no hp lebih dari 13',
                        
        ]);
    }

protected function create(array $req) {

      $insertuser = user::create([

         'name' => $req['nama'],
         'email' => $req['email'],
         'token' => str_random(25),
         'id_role' => 2 ,
         'password' => bcrypt($req['password'])
       ]);

      $maxuser = user::max('id');
      $insertscarapping = scraping::create([

        'id_user' => $maxuser,
        'nama' => $req['nama'],
        'email' => $req['email'],
        'password' => bcrypt($req['password']),
        'no_identitas' => $req['identitas'],
        'tanggal_lahir' => $req['tanggal'],
        'pekerjaan' => $req['pekerjaan'],
        'no_hp' => $req['tel'],
        'id_prov' => $req['provinsi'],
        'id_kab' => $req['kabupaten'],
        'email' => $req['email'],
        'lat' => $req['lat'],
        'long' => $req['long'],
        'alamat' => $req['alamat']

    ]);
    return $insertuser;

    }
}
