<?php

namespace ZFT\User;

Use ZFT;

class Repository
{

    function __construct(IdentityMapInterface $identityMap, DataMapperInterface $data_mapper)
    {


    }


    public function getUserById($id){
        return new ZFT\User();
    }

}