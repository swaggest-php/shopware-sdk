<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Internal;

use Swaggest\ShopwareSdk\Context;

interface HeaderProviderInterface
{
    public function getHeaders(Context $context);
}
