<?php

namespace petarpetkovic996\LaravelJsendResponse;

use Illuminate\Routing\ResponseFactory;

interface ResponseMacroInterface
{

    /**
     * Get a macro definition.
     *
     * @param ResponseFactory $factory
     * @return void
     */
    public function getDefinition(ResponseFactory $factory): void;
}
