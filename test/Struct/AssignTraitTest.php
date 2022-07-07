<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Test\Struct;

use PHPUnit\Framework\TestCase;
use Swaggest\ShopwareSdk\Test\Struct\Structs\TestStruct;

final class AssignTraitTest extends TestCase
{
    public function testAssignArray(): void
    {
        $struct = new TestStruct();

        $struct->assign([
            'firstName' => 'Edyta',
            'lastName' => 'Górniak',
        ]);

        self::assertSame('Edyta', $struct->getFirstName());
        self::assertSame('Górniak', $struct->getLastName());
    }
}
