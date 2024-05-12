<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Http\Client\Response;

class GoogleFitException extends Exception
{
    public function __construct(Response $response)
    {
        $this->message = $response->json('error.message');
    }
}
