<?php

/**
 * @file plugins/generic/compilatio/api/DTO/CompilatioDetection.php
 *
 * Copyright (c) 2026 Letimio
 * Distributed under the GNU GPL v3 or later. For full terms see the file LICENSE.
 *
 * @class CompilatioDetection
 * @brief Represents a Compilatio detection option.
 */

namespace APP\plugins\generic\letimio\api\DTO;

final class CompilatioDetection
{
    public function __construct(
        public readonly string $process,
        public bool $enabled,
        public readonly bool $configurable,
    ) {
    }
}
