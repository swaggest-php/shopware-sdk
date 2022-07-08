<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Schema\Flag;

final class SearchRanking extends AbstractFlag
{
    public function __construct(private float $ranking)
    {
    }

    public function getRanking(): float
    {
        return $this->ranking;
    }
}
