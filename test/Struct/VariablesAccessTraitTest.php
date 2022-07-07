<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Test\Struct;

use PHPUnit\Framework\TestCase;
use Swaggest\ShopwareSdk\Test\Struct\Structs\TestStruct;

final class VariablesAccessTraitTest extends TestCase
{
    public function testGetVars(): void
    {
        $struct = new TestStruct();
        $struct->setFirstName('Małgorzata');
        $struct->setLastName('Andrzejewicz');

        $vars = $struct->getVars();

        self::assertSame('Małgorzata', $vars['firstName']);
        self::assertSame('Andrzejewicz', $vars['lastName']);
    }
}
