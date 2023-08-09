<?php

namespace petarpetkovic996\LaravelJsendResponse\Macros;

use petarpetkovic996\LaravelJsendResponse\ResponseMacroInterface;
use Illuminate\Routing\ResponseFactory;

class Error implements ResponseMacroInterface
{
    /**
     * Get an error macro definition.
     *
     * @param ResponseFactory $factory
     * @return void
     */
    public function getDefinition(ResponseFactory $factory): void
    {
        $factory->macro('error', function (string $message = '', int $status = 500) use ($factory) {
            $format = [
                'status' => 'error',
                'message' => $message,
            ];

            return $factory->make($format, $status);
        });
    }
}
