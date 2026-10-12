<?php

namespace APP\plugins\generic\letimio\api\DTO;

final class CompilatioUser
{
    public function __construct(
        public readonly CompilatioManagedBundle $managedBundle,
    ) {
    }
}
