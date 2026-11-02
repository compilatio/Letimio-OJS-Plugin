<?php

/**
 * @file plugins/generic/compilatio/api/DTO/CompilatioUser.php
 *
 * Copyright (c) 2026 Letimio
 * Distributed under the GNU GPL v3 or later. For full terms see the file LICENSE.
 *
 * @class CompilatioUser
 * @brief Represents a Compilatio user.
 */

namespace APP\plugins\generic\letimio\api\DTO;

final class CompilatioUser
{
    public function __construct(
        public readonly CompilatioManagedBundle $managedBundle,
    ) {
    }
}
