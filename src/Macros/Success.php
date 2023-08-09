<?php

namespace petarpetkovic996\LaravelJsendResponse\Macros;

use petarpetkovic996\LaravelJsendResponse\ResponseMacroInterface;
use Illuminate\Routing\ResponseFactory;

class Success implements ResponseMacroInterface
{
    /**
     * Get a success macro definition.
     *
     * @param ResponseFactory $factory
     * @return void
     */
    public function getDefinition(ResponseFactory $factory): void
    {
        $factory->macro('success', function ($data = null, int $status = 200) use ($factory) {
            $format = [
                'status' => 'success',
                'data' => $data,
            ];

            return $factory->make($format, $status);
        });
    }
}
