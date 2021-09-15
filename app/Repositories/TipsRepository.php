<?php

namespace App\Repositories;

use App\Models\Tips;
use Illuminate\Support\Facades\DB;

class TipsRepository {
    public function get($params = []) {
        $tips = Tips::latest('id');

        if(isset($params['id'])) {
            $tips->where('id', $params['id']);
        }

        if(isset($params['title'])) {
            $tips->where('title', $params['title']);
        }

        if(isset($params['image'])) {
            $tips->where('image', $params['image']);
        }

        if(isset($params['detail'])) {
            $tips->where('detail', $params['detail']);
        }

        if(isset($params['created_by'])) {
            $tips->where('created_by', $params['created_by']);
        }

        if(isset($params['created_at'])) {
            $tips->where('created_at', $params['created_at']);
        }

        if(isset($params['updated_at'])) {
            $tips->where('updated_at', $params['updated_at']);
        }

        if(isset($params['id'])) {
            $result = $tips->first();
        } else {
            $result = $tips->get();
        }

        return $result;
    }

    public function list($params = []) {
        $tips = Tips::latest('id');
        $result = $tips->join('account', 'tips.created_by','=','account.id')
                        ->select('tips.*', 'account.name')
                        ->get();

        return $result;
    }

    public function store($params = []) {
        if(isset($params['id'])) {
            $tips = Tips::find($params['id']);
        } else {
            $tips = new Tips;
        }

        if(isset($params['title'])) {
            $tips->title =  $params['title'];
        }

        if(isset($params['image'])) {
            $tips->image =  $params['image'];
        }

        if(isset($params['detail'])) {
            $tips->detail =  $params['detail'];
        }

        if(isset($params['created_by'])) {
            $tips->created_by =  $params['created_by'];
        }

        $tips->save();
        return $tips->id;
    }

    public function delete($params = []) {

    }
}
