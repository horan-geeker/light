<?php

namespace bootstrap;

use Exception\Exception;
use Http\Response;

class App
{
    public function handle()
    {
        $response = new Response();
        try {
            $response->setContent('');
        } catch (\Exception $e) {
            $exception = new Exception();
            $exception->handle($e, $response);
        }
        return $response;
    }
}