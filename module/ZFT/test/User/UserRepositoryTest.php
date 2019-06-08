<?php

namespace ZFTest\User;

use PHPUnit\Framework\TestCase;
use ZFT\User;
use ZFT\User\Repository as UserRepository;

/* PHP 5
class IdentityMapStub implements User\IdentityMapInterface
{

}

class DataMapperStub implements User\DataMapperInterface
{

}

*/


class UserRepositoryTest extends TestCase
{

    public function testCanCreateUserRepositoryObject()
    {
        /* PHP 5 version
        $identityMapStub = new IdentityMapStub();
        $dataMapperStub = new DataMapperStub(); */

        $identityMapStub = new class() implements User\IdentityMapInterface{};
        $dataMapperStub = new class() implements User\DataMapperInterface {};


        $repository = new UserRepository($identityMapStub, $dataMapperStub);

        $this->assertInstanceOf(UserRepository::class, $repository);


    }


}