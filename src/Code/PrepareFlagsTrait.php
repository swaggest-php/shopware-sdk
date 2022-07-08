<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Code;

use Swaggest\ShopwareSdk\Code\EntityDefinition\FlagGenerator;

/**
 * @property FlagGenerator $flagGenerator
 */
trait PrepareFlagsTrait
{
    private function prepareFlags(array $flagData): string
    {
        $flags = [];

        foreach ($flagData as $flagName => $flagDescriptor) {
            $flags[] = $this->flagGenerator->generateFlag($flagName, $flagDescriptor);
        }

        return \implode(', ', $flags);
    }
}
