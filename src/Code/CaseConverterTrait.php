<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Code;

use function array_map;
use function explode;
use function implode;

trait CaseConverterTrait
{
    private function snakeToPascalCase(string $snakeCased): string
    {
        return implode('', array_map('ucfirst', explode('_', $snakeCased)));
    }
}
