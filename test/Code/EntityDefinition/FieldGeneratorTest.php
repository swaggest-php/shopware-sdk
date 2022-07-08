<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Test\Code\EntityDefinition;

use PHPUnit\Framework\TestCase;
use Psr\EventDispatcher\EventDispatcherInterface;
use Swaggest\ShopwareSdk\Code\EntityDefinition\FieldGenerator;
use Swaggest\ShopwareSdk\Code\EntityDefinition\FlagGenerator;

final class FieldGeneratorTest extends TestCase
{
    private FieldGenerator $fieldGenerator;

    protected function setUp(): void
    {
        $eventDispatcher = $this->createMock(EventDispatcherInterface::class);

        $this->fieldGenerator = new FieldGenerator(
            new FlagGenerator($eventDispatcher),
            $eventDispatcher
        );
    }

    /**
     * @dataProvider provideFieldSchema
     */
    public function testGenerateField(string $fieldName, array $field, string $expected): void
    {
        $actual = $this->fieldGenerator->generateField($fieldName, $field);

        self::assertSame($expected, $actual);
    }

    public function provideFieldSchema(): iterable
    {
        yield [
            'id',
            [
                'type' => 'uuid',
                'flags' => [
                    'read_protected' => [
                        [
                            'Shopware\\Core\\Framework\\Api\\Context\\AdminApiSource',
                        ],
                    ],
                    'primary_key' => true,
                    'required' => true,
                ],
            ],
            "(new Field('id', 'uuid'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new PrimaryKey(), new Required())",
        ];

        yield [
            'createdAt',
            [
                'type' => 'date',
                'flags' => [
                    'read_protected' => [
                        [
                            'Shopware\\Core\\Framework\\Api\\Context\\AdminApiSource',
                            'Shopware\\Core\\Framework\\Api\\Context\\SalesChannelApiSource',
                        ],
                    ],
                    'required' => true,
                ],
            ],
            "(new Field('createdAt', 'date'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new Required())",
        ];

        yield [
            'appSecret',
            [
                "type" => "string",
                "flags" => [
                    "write_protected" => [
                        [
                            "system",
                        ],
                    ],
                ],
            ],
            "(new Field('appSecret', 'string'))->addFlags(new WriteProtected([ProtectedFlag::SYSTEM]))",
        ];
    }
}
