<?php

namespace App\Http\Controllers;

use App\Repositories\ApiRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ApiController extends Controller {

    public function __construct(ApiRepository $apiRepo) {
        $this->apiRepo = $apiRepo;
    }

    public function history_blood(Request $request) {
        if($request->isMethod('post')) {
            $input_json = $request->json()->all();
            $rules_input = [
                'id' => 'required'
            ];

            $validator = Validator::make($input_json, $rules_input);

            if($validator->fails()) {
                $response_success['status'] = "error";
                $response_success['code'] = 403;
                $response_success['msg'] = "input data not completed";

                return response($response_success, 200);
            } else {
                if(isset($input_json['id'])) {
                    $params['id'] = $input_json['id'];

                    $data_blood = $this->apiRepo->get_hisotry_blood(['id' => $params['id']]);

                    $response_success['status'] = "success";
                    $response_success['code'] = 400;
                    $response_success['msg'] = "success get history blood";
                    $response_success['data'] = $data_blood;

                    return response($response_success, 200);
                } else {
                    $response_success['status'] = "error";
                    $response_success['code'] = 401;
                    $response_success['msg'] = "params not complete";

                    return response($response_success, 200);
                }

            }
        } else {
            $response_success['status'] = "error";
            $response_success['code'] = 402;
            $response_success['msg'] = "method get is not allowed";

            return response($response_success, 200);
        }
    }

}
