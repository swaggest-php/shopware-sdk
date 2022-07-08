<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Test\Code\EntityDefinition;

use PHPUnit\Framework\TestCase;
use Psr\EventDispatcher\EventDispatcherInterface;
use Swaggest\ShopwareSdk\Code\EntityDefinition\FlagGenerator;

final class FlagGeneratorTest extends TestCase
{
    private FlagGenerator $flagGenerator;

    protected function setUp(): void
    {
        $this->flagGenerator = new FlagGenerator(
            $this->createMock(EventDispatcherInterface::class)
        );
    }

    /**
     * @dataProvider provideParameterlessFlags
     */
    public function testGenerateParameterlessFlag(string $flagName, string $expected, string $dispatchedClass): void
    {
        $actual = $this->flagGenerator->generateFlag($flagName, true);

        self::assertSame($expected, $actual);
    }

    /**
     * @dataProvider provideFlagsWithParameters
     */
    public function testGenerateFlagWithParameters(string $flagName, array $flagDescriptor, string $expected, string $dispatchedClass): void
    {
        $actual = $this->flagGenerator->generateFlag($flagName, $flagDescriptor);

        self::assertSame($expected, $actual);
    }

    public function provideParameterlessFlags(): iterable
    {
        yield ['cascade_delete', 'new CascadeDelete()', 'Swaggest\\ShopwareSdk\\Schema\\Flag\\CascadeDelete'];
        yield ['primary_key', 'new PrimaryKey()', 'Swaggest\\ShopwareSdk\\Schema\\Flag\\PrimaryKey'];
        yield ['required', 'new Required()', 'Swaggest\\ShopwareSdk\\Schema\\Flag\\Required'];
    }

    public function provideFlagsWithParameters(): iterable
    {
        yield ['read_protected', [['Shopware\\Core\\Framework\\Api\\Context\\AdminApiSource']], "new ReadProtected([ProtectedFlag::ADMIN_API])", 'Swaggest\\ShopwareSdk\\Schema\\Flag\\ReadProtected'];
        yield ['write_protected', [['Shopware\\Core\\Framework\\Api\\Context\\SalesChannelApiSource']], "new WriteProtected([ProtectedFlag::SALES_CHANNEL_API])", 'Swaggest\\ShopwareSdk\\Schema\\Flag\\WriteProtected'];
    }
}
