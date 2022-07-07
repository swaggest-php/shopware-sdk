<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Test\Struct;

use Swaggest\ShopwareSdk\Struct\Struct;
use Swaggest\ShopwareSdk\Test\Struct\Structs\AnotherTestStruct;
use Swaggest\ShopwareSdk\Test\Struct\Structs\TestStruct;
use Swaggest\ShopwareSdk\Test\Struct\Structs\YetAnotherTestStruct;
use PHPUnit\Framework\TestCase;

final class ExtendableTraitTest extends TestCase
{
    public function testAddExtension(): void
    {
        $struct = new TestStruct();
        $anotherStruct = new AnotherTestStruct();

        $struct->addExtension('extension', $anotherStruct);

        $extension = $struct->getExtension('extension');

        self::assertSame($anotherStruct, $extension);
    }

    public function testAddArrayExtension(): void
    {
        $struct = new TestStruct();
        $arrayExtension = [
            'extendedField' => 'value',
            'anotherExtendedField' => 'another value',
        ];

        $extension = $struct->getExtension('array_extension')->getVars();

        self::assertSame($arrayExtension, $extension);
    }

    /**
     * @dataProvider provideExtensions
     */
    public function testAddExtensions(Struct $firstExt, Struct $secondExt, Struct $thirdExt): void
    {
        $extensions = [
            'first_ext' => $firstExt,
            'second_ext' => $secondExt,
            'third_ext' => $thirdExt,
        ];

        $struct = new TestStruct();
        $struct->addExtensions($extensions);

        $retrieved = $struct->getExtensions();

        self::assertEquals($extensions, $retrieved);
    }

    public function testGetExtensionOfType(): void
    {
        $struct = new TestStruct();
        $struct->addExtension('ext', new TestStruct());

        $extension = $struct->getExtensionOfType('ext', TestStruct::class);

        self::assertNotNull($extension);

        $extension = $struct->getExtensionOfType('ext', AnotherTestStruct::class);

        self::assertNull($extension);
    }

    public function testSetExtensions(): void
    {
        $struct = new TestStruct();

        $struct->addExtension('ext', new TestStruct());

        self::assertCount(1, $struct->getExtensions());

        $struct->setExtensions([]);

        self::assertCount(0, $struct->getExtensions());
    }

    public function testRemoveExtension(): void
    {
        $struct = new TestStruct();

        $struct->addExtension('ext', new TestStruct());

        self::assertCount(1, $struct->getExtensions());

        $struct->removeExtension('ext');

        self::assertCount(0, $struct->getExtensions());
    }

    public function provideExtensions(): iterable
    {
        yield [new TestStruct(), new TestStruct(), new TestStruct()];
        yield [new AnotherTestStruct(), new AnotherTestStruct(), new AnotherTestStruct()];
        yield [new YetAnotherTestStruct(), new YetAnotherTestStruct(), new YetAnotherTestStruct()];
    }
}
