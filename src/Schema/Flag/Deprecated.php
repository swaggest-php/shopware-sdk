<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Schema\Flag;

final class Deprecated extends AbstractFlag
{
    public function __construct(
        private string $deprecatedSince,
        private string $willBeRemovedIn,
        private ?string $replacedBy
    ) {
    }

    public function getDeprecatedSince(): string
    {
        return $this->deprecatedSince;
    }

    public function getWillBeRemovedIn(): string
    {
        return $this->willBeRemovedIn;
    }

    public function getReplacedBy(): ?string
    {
        return $this->replacedBy;
    }
}
