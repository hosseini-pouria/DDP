<?php

namespace Src\RequestBuilder;

class Request
{
    private $uri;
    private $data;
    private $method;
    private $headers;
    private $agent;

    public function __construct(RequestBuilder $builder)
    {
        $this->uri = $builder->getUri();
        $this->data = $builder->getData();
        $this->method = $builder->getMethod();
        $this->headers = $builder->getHeaders();
        $this->agent = $builder->getAgent();
    }

    public function run()
    {
        $request = curl_init($this->uri);
        // ...
        return null;
    }
}
