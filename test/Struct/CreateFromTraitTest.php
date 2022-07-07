<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Test\Struct;

use PHPUnit\Framework\TestCase;
use Swaggest\ShopwareSdk\Test\Struct\Structs\AnotherTestStruct;
use Swaggest\ShopwareSdk\Test\Struct\Structs\TestStruct;

final class CreateFromTraitTest extends TestCase
{
    public function testCreateFrom(): void
    {
        $struct = new TestStruct();
        $struct->setFirstName('Robert');
        $struct->setLastName('Makłowicz');

        /** @var AnotherTestStruct $anotherStruct */
        $anotherStruct = AnotherTestStruct::createFrom($struct);

        self::assertSame('Robert', $anotherStruct->getFirstName());
        self::assertSame('Makłowicz', $anotherStruct->getLastName());
    }
}
