<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Code;

interface UseAwareCodeGeneratorInterface
{
    public function addUse(string $class): void;
}
