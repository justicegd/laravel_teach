<?php

namespace App\Repositories;


use App\Models\Users;

class UsersRepository{

    private $model;

    public function __construct(Users $users)
    {
        $this->model = $users;
    }

    public function get()
    {
        return $this->model->get();
    }


}