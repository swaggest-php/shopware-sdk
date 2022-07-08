<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Test\Internal;

use PHPUnit\Framework\TestCase;
use Swaggest\ShopwareSdk\Context;
use Swaggest\ShopwareSdk\Internal\HeaderProvider;

final class HeaderProviderFactoryTest extends TestCase
{
    public function testGetHeadersWithDefaults(): void
    {
        $context = new Context(
            'clientId',
            'clientSecret',
            'http://shopware.shop'
        );

        $headerProvider = new HeaderProvider();

        $headers = $headerProvider->getHeaders($context);

        self::assertSame('application/vnd.api+json', $headers['Accept']);
        self::assertSame('application/json', $headers['Content-Type']);

        self::assertFalse($headers['sw-api-compatibility']);
        self::assertFalse($headers['sw-inheritance']);

        self::assertArrayNotHasKey('sw-currency-id', $headers);
        self::assertArrayNotHasKey('sw-language-id', $headers);
        self::assertArrayNotHasKey('sw-version-id', $headers);
    }
}
