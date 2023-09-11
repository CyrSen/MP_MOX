<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;


class RegisterController extends Controller
{
    use RegistersUsers;

    protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct()
    {
        $this->middleware('guest');
    }

    protected function validator(array $data)
    {
        $welcome = DB::table('welcome')->first();
        $onetimer = $welcome->onetimer;
        // ORIGINAL VALIDATION BACKEND
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'onetimer' => ['required', 'string', Rule::in([$onetimer])],
        ]);
        // OPTIONAL VALIDATION BACKEND
        /* return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['nullable', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'onetimer' => ['required', 'string', Rule::in([$onetimer])],
        ]); */
        
    }

    protected function create(array $data)
    {
        // ORIGINAL CREATE BACKEND
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        // OPTIONAL CREATE BACKEND
        /* $userData = [
            'name' => $data['name'],
            'password' => Hash::make($data['password']),
        ];
    
        if (isset($data['email'])) {
            $userData['email'] = $data['email'];
        }
    
        return User::create($userData); */
    }
}
