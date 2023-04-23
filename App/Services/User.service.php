<?php

namespace App\Services;

use App\Models\User;

class UserService
{
    public function get($id = null)
    {
        if ($id) {
            return User::get($id);
        } else {
            return User::all();
        }
    }

    public function post()
    {
    }

    public function put()
    {
    }

    public function delete()
    {
    }
}
