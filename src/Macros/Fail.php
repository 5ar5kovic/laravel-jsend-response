<?php

namespace petarpetkovic996\LaravelJsendResponse\Macros;

use petarpetkovic996\LaravelJsendResponse\ResponseMacroInterface;
use Illuminate\Routing\ResponseFactory;

class Fail implements ResponseMacroInterface
{
    /**
     * Get a fail macro definition.
     *
     * @param ResponseFactory $factory
     * @return void
     */
    public function getDefinition(ResponseFactory $factory): void
    {
        $factory->macro('fail', function ($data = null, int $status = 400) use ($factory) {
            $format = [
                'status' => 'fail',
                'data' => $data,
            ];

            return $factory->make($format, $status);
        });
    }
}
