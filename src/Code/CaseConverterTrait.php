<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Code;

trait CaseConverterTrait
{
    private function snakeToPascalCase(string $snakeCased): string
    {
        return \implode('', \array_map('ucfirst', \explode('_', $snakeCased)));
    }
}
