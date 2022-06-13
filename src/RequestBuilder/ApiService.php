<?php

namespace Src\RequestBuilder;

class ApiService
{
    public function fetchUsers()
    {
        $request = RequestBuilder::forge()
            ->withUri('https://api-service.com/users')
            ->withMethod('GET')
            ->withData([
                'user_name' => 'some_user_name',
                'password' => 'some_password'
            ])->build();

        $response = $request->run();
    }
}
