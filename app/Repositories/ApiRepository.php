<?php

namespace App\Repositories;

use App\Models\BloodSugar;

class ApiRepository {
    public function get_hisotry_blood($params = []) {
        $history_blood = BloodSugar::latest('id');

        $result = $history_blood->where('user_id',$params['id'])
                                ->get();
        return $result;
    }

    public function get_graph_blood($params = []) {

    }
}
