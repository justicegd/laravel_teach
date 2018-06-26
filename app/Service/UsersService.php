<?php

namespace App\Repositories;


class UsersService{

    private $usersRep;

    public function __construct(UsersRepository $usersRep)
    {
        $this->usersRep = $usersRep;
    }

    function getAll(){
        return $this->usersRep->get();
    }


}