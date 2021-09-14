<?php

namespace App\Http\Controllers;

use App\Repositories\UserRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthWebController extends Controller
{
    public function __construct(UserRepository $userRepo) {
        if(Auth::guard('web')->check()) {
            return redirect('dashboard');
        }

        $this->userRepo = $userRepo;
    }

    public function login(Request $request) {
        if($request->isMethod('POST')) {
            // Validate the form input
            $this->validate($request, [
                'email' => 'required',
                'password' => 'required'
            ]);

            // Searching the email in database
            $userRepo = $this->userRepo->get(['email' => $request->email]);

            // Checking the email is exist
            if($userRepo->count() == 0) {
                // Send flash session message
                $request->session()->flash('error_login', 'email salah');
            } else {
                // Saving credentials
                $credentials = array('email' => $request->email, 'password' => $request->password);

                // Attempt the credentials and redirect to dashboard
                if(Auth::attempt($credentials)) {
                    return redirect('dashboard');
                } else {
                    $request->session()->flash('error_login', 'Cek kembali email dan password');
                    return redirect('login');
                }
            }
        }

        if(Auth::guard('web')->check()) {
            return redirect('dashboard');
        } else {
            return redirect('login');
        }
    }

    public function logout() {

    }
}
