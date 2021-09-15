<?php

namespace App\Repositories;

use App\Models\User;

class AuthRepository {
    public function get($params = []) {
        $user = User::latest('id');

        if(isset($params['id'])) {
            $user->where('id', $params['id']);
        }

        if(isset($params['email'])) {
            $user->where('email', $params['email']);
        }

        if(isset($params['password'])) {
            $user->where('password', $params['password']);
        }

        if(isset($params['name'])) {
            $user->where('name', $params['name']);
        }

        if(isset($params['role'])) {
            $user->where('role', $params['role']);
        }

        $result = $user->first();

        return $result;
    }

    public function store($params = []) {
        if(isset($params['id'])) {
            $user = User::find($params['id']);
        } else {
            $user = new User;
        }

        if(isset($params['email'])) {
            $user->email = $params['email'];
        }

        if(isset($params['password'])) {
            $user->password = $params['password'];
        }

        if(isset($params['name'])) {
            $user->name = $params['name'];
        }

        if(isset($params['role'])) {
            $user->role = $params['role'];
        }

        $user->save();
    }

    public function delete($params = []) {
        if(isset($params['id'])) {
            $user = User::find($params['id']);
            $user->delete();
        }
    }
}
