<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Crypt;
use Illuminate\Http\Request;
use App\Repositories\AuthRepository;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Contracts\Encryption\DecryptException;

class AuthController extends Controller {

    public function __construct(AuthRepository $authRepo) {
        $this->authRepo = $authRepo;
    }

    public function register(Request $request) {
        if($request->isMethod('post')) {
            $register_input = $request->json()->all();

            $rules_register = [
                        'email' => 'required',
                        'password' => 'required',
                        'name' => 'required'
                    ];

            $validator = Validator::make($register_input, $rules_register);

            if($validator->fails()) {
                $response_success['status'] = "error";
                $response_success['code'] = 104;
                $response_success['msg'] = "input data not completed";

                return response($response_success, 200);
            } else {
                if(isset($register_input['email'])) {
                    $params_check_user = $this->authRepo->get(['email' => $register_input['email']]);

                    if(is_null($params_check_user)) {
                        $params['email'] = $register_input['email'];
                        $params['password'] = Crypt::encrypt($register_input['password']);
                        $params['name'] = $register_input['name'];
                        $params['role'] = 'user';

                        $this->authRepo->store($params);

                        $response_success['status'] = "success";
                        $response_success['code'] = 100;
                        $response_success['msg'] = "register account successful";

                        return response($response_success, 200);

                    } else {
                        $response_success['status'] = "error";
                        $response_success['code'] = 101;
                        $response_success['msg'] = "duplicate email account";

                        return response($response_success, 200);
                    }
                } else {
                    $response_success['status'] = "error";
                    $response_success['code'] = 102;
                    $response_success['msg'] = "email field required";

                    return response($response_success, 200);
                }
            }
        }

        $response_success['status'] = "error";
        $response_success['code'] = 103;
        $response_success['msg'] = "method get is not allowed";

        return response($response_success, 200);
    }

    public function signin(Request $request) {
        if($request->isMethod('post')) {
            $signin_input = $request->json()->all();

            $rules_signin = [
                'email' => 'required',
                'password' => 'required',
            ];

            $validator_signin = Validator::make($signin_input, $rules_signin);

            if($validator_signin->fails()) {
                $response_success['status'] = "error";
                $response_success['code'] = 204;
                $response_success['msg'] = "input data not completed";

                return response($response_success, 200);
            } else {
                $params_check_user = $this->authRepo->get(['email' => $signin_input['email']]);

                if(is_null($params_check_user)) {
                    $response_success['status'] = "error";
                    $response_success['code'] = 201;
                    $response_success['msg'] = "user not found";

                    return response($response_success, 200);
                } else {
                    $params['email'] = $signin_input['email'];
                    $params['password'] = $signin_input['password'];
                    $decrypted = Crypt::decrypt($params_check_user->password);

                    if($params['password'] == $decrypted) {
                        $response_success['status'] = "success";
                        $response_success['code'] = 200;
                        $response_success['msg'] = "sign in sucessful";
                        $response_success['id'] = $params_check_user->id;

                        return response($response_success, 200);

                    } else {
                        $response_success['status'] = "error";
                        $response_success['code'] = 202;
                        $response_success['msg'] = "wrong password";

                        return response($response_success, 200);
                    }
                }
            }
        }

        $response_success['status'] = "error";
        $response_success['code'] = 203;
        $response_success['msg'] = "method get is not allowed";

        return response($response_success, 200);
    }
}
