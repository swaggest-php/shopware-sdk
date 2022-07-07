<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Test\Struct;

use PHPUnit\Framework\TestCase;
use Swaggest\ShopwareSdk\Struct\Struct;
use Swaggest\ShopwareSdk\Test\Struct\Structs\AnotherTestStruct;
use Swaggest\ShopwareSdk\Test\Struct\Structs\TestStruct;
use Swaggest\ShopwareSdk\Test\Struct\Structs\YetAnotherTestStruct;

final class StructTest extends TestCase
{
    /**
     * @dataProvider provideApiAliases
     */
    public function testGetApiAlias(string $expectedApiAlias, Struct $struct): void
    {
        self::assertSame($expectedApiAlias, $struct->getApiAlias());
    }

    public function provideApiAliases(): iterable
    {
        yield ['swaggest_shopware_sdk_test_struct_structs_test_struct', new TestStruct()];
        yield ['swaggest_shopware_sdk_test_struct_structs_another_test_struct', new AnotherTestStruct()];
        yield ['swaggest_shopware_sdk_test_struct_structs_yet_another_test_struct', new YetAnotherTestStruct()];
    }
}
