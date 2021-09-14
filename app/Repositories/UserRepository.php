<?php

namespace App\Repositories;

use App\Models\User;

class UserRepository {
    public function get($params = []) {
        $user = User::latest('id');

        if(isset($params['id'])) {
            $user->where('id', $params['id']);
        }

        if(isset($params['name'])) {
            $user->where('name', $params['name']);
        }

        if(isset($params['email'])) {
            $user->where('email', $params['email']);
        }

        if(isset($params['password'])) {
            $user->where('password', $params['password']);
        }

        if(isset($params['role'])) {
            $user->where('role', $params['role']);
        }

        if(isset($params['created_at'])) {
            $user->where('created_at', $params['created_at']);
        }

        if(isset($params['updated_at'])) {
            $user->where('updated_at', $params['updated_at']);
        }

        if(isset($params['id'])) {
            $result = $user->first();
        } else {
            $result = $user->get();
        }

        return $result;
    }

    public function list($params = []) {
        $user = User::latest('id');
        $result = $user->get();

        return $result;
    }
}
