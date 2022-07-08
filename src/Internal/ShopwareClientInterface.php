<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Internal;

use Psr\Http\Message\ResponseInterface;
use Swaggest\ShopwareSdk\Context;

/**
 * @internal
 */
interface ShopwareClientInterface
{
    public function get(string $endpoint, Context $context): ResponseInterface;

    public function sendRequest(string $method, string $endpoint, array $data, Context $context): ResponseInterface;
}
