<?php

namespace App\Services\User;

use App\Interfaces\User\UserInterface;
use App\Traits\ResponseAPI;

class UserService implements UserInterface
{
    use ResponseAPI;
    public function index(): string
    {
        return $this->response("User Lists");
    }
}
