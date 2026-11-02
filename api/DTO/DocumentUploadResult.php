<?php

/**
 * @file plugins/generic/compilatio/api/DTO/DocumentUploadResult.php
 *
 * Copyright (c) 2026 Letimio
 * Distributed under the GNU GPL v3 or later. For full terms see the file LICENSE.
 *
 * @class DocumentUploadResult
 * @brief Represents the result of a document upload.
 */

namespace APP\plugins\generic\letimio\api\DTO;

final readonly class DocumentUploadResult
{
    public function __construct(
        public CompilatioDocument $document,
        public string $status,
    ) {}
}
