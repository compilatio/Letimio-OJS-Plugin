<?php

namespace APP\plugins\generic\letimio\api\DTO;

final readonly class CompilatioResponse
{
    public function __construct(
        public int $statusCode,
        public object $body,
    ) {}
}
