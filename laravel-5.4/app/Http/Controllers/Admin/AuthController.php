<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    protected $dirView = 'AdminView.Auth.';
    public function login(Request $request)
    {
//        if (Auth::guard('admin')->check()) {
//            return redirect()->route('admin.homes.index');
//        }
//
//        if ($request->isMethod('POST')) {
//            $data['username'] = strtolower(trim($request['username']));
//            $data['password'] = trim($request['password']);
//            $validateDefault = [
//                'username' => 'required',
//                'password' => 'required'
//            ];
//            $messValidate = [
//                'username.required' => 'Username is not empty!',
//                'password.required' => 'Password is not empty!'
//            ];
//            $validator = Validator::make($data, $validateDefault, $messValidate);
//            if ($validator->fails()) {
//                return redirect()->route('admin.auth.login')->withErrors($validator->errors())
//                    ->withInput();
//            }
//            $data['deleted_at'] = null;
//            $remember = isset($request['remember']) && $request['remember'] == 1 ? true : false;
//            $auth = Auth::guard('admin')->attempt($data, $remember);
//            if (!empty($auth)) {
//                if (Cache::has($request->ip())) {
//                    Cache::forget($request->ip());
//                }
//                return redirect()->route('admin.homes.index');
//            } else {
//                return redirect()->route('admin.auth.login')->withErrors(['Login fails!'])
//                    ->withInput();
//            }
//
//        }


        return view($this->dirView . 'login');
    }
}
