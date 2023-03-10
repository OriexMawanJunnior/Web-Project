<?php

namespace App\Validation;
use App\Models\Akun;

class UserRules
{
    public function validateUser(string $str,string $fields,array $data) {
        $model = new Akun();
        $user = $model->where('email', $data['email'])->first();
        if (!$user)
            return false;
        return password_verify($data['password'], $user['password']);
    }
}
