<?php

namespace petarpetkovic996\LaravelJsendResponse;

use Illuminate\Contracts\Routing\ResponseFactory;

class ResponseMacros
{
    /**
     * Macros class names.
     *
     * @var array|string[]
     */
    protected array $macros = [];

    /**
     * @param ResponseFactory $factory
     */
    public function __construct(ResponseFactory $factory)
    {
        $this->macros = [
            Macros\Error::class,
            Macros\Fail::class,
            Macros\Success::class,
        ];

        $this->bindMacros($factory);
    }

    /**
     * Bind all macros.
     *
     * @param ResponseFactory $factory
     * @return void
     */
    public function bindMacros(ResponseFactory $factory): void
    {
        foreach ($this->macros as $macro) {
            (new $macro)->getDefinition($factory);
        }
    }
}
