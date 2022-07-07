<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Test\Struct;

use PHPUnit\Framework\TestCase;
use Swaggest\ShopwareSdk\Test\Struct\Structs\TestStruct;

final class CloneTraitTest extends TestCase
{
    /**
     * @dataProvider provideStructClones
     */
    public function testClone(TestStruct $struct): void
    {
        $cloned = clone $struct;

        self::assertEquals($cloned, $struct);
        self::assertNotSame($cloned, $struct);

        self::assertSame($struct->getFirstName(), $cloned->getFirstName());
        self::assertSame($struct->getLastName(), $cloned->getLastName());
    }

    public function provideStructClones(): iterable
    {
        $struct = new TestStruct();
        $struct->setFirstName('Max');
        $struct->setLastName('Kolonko');

        yield [$struct];

        $struct = new TestStruct();
        $struct->setFirstName('John');
        $struct->setLastName('Paul');

        yield [$struct];
    }
}
