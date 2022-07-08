<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Struct;

trait VariablesAccessTrait
{
    public function getVars(): array
    {
        return \get_object_vars($this);
    }
}
