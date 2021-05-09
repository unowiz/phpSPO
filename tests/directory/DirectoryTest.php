<?php

namespace Office365;


class DirectoryTest extends GraphTestCase
{

    public static function setUpBeforeClass()
    {
        parent::setUpBeforeClass();
    }

    public function testCurrentUser()
    {
        $currentUser = self::$graphClient->getMe()->get()->executeQuery();
        self::assertNotNull($currentUser->getUserPrincipalName());
    }

    public function testListUsers()
    {
        $users = self::$graphClient->getUsers()->get()->executeQuery();
        self::assertNotNull($users->getResourcePath());
    }

}