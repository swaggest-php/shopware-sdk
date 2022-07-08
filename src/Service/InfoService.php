<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Service;

use Swaggest\ShopwareSdk\Context;
use Swaggest\ShopwareSdk\Internal\ShopwareClientInterface;

final class InfoService
{
    public function __construct(private ShopwareClientInterface $client)
    {
    }

    public function getEntitySchema(Context $context): string
    {
        $response = $this->client->get('/_info/entity-schema.json', $context);

        return $response->getBody()->getContents();
    }
}
