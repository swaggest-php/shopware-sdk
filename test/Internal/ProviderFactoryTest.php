<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Test\Internal;

use PHPUnit\Framework\TestCase;
use Swaggest\ShopwareSdk\Context;
use Swaggest\ShopwareSdk\Internal\ProviderFactory;

final class ProviderFactoryTest extends TestCase
{
    public function testCreate(): void
    {
        $context = new Context(
            'clientId',
            'clientSecret',
            'https://shopware.shop'
        );

        $factory = new ProviderFactory();

        $provider = $factory->create($context);

        self::assertSame('https://shopware.shop/api/oauth/token', $provider->getBaseAccessTokenUrl([]));
    }
}
