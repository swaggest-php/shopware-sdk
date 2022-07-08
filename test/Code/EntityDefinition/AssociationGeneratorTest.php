<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Test\Code\EntityDefinition;

use PHPUnit\Framework\TestCase;
use Psr\EventDispatcher\EventDispatcherInterface;
use Swaggest\ShopwareSdk\Code\EntityDefinition\AssociationGenerator;
use Swaggest\ShopwareSdk\Code\EntityDefinition\FlagGenerator;

final class AssociationGeneratorTest extends TestCase
{
    private AssociationGenerator $associationGenerator;

    protected function setUp(): void
    {
        $eventDispatcher = $this->createMock(EventDispatcherInterface::class);

        $this->associationGenerator = new AssociationGenerator(
            new FlagGenerator($eventDispatcher),
            $eventDispatcher
        );
    }

    /**
     * @dataProvider provideAssociationSchema
     */
    public function testGenerateAssociation(string $fieldName, array $field, string $expected): void
    {
        $actual = $this->associationGenerator->generateAssociation($fieldName, $field);

        self::assertSame($expected, $actual);
    }

    public function provideAssociationSchema(): iterable
    {
        yield [
            'createdNotifications',
            [
                'type' => 'association',
                'relation' => 'one_to_many',
                'entity' => 'notification',
                'flags' => [
                    'read_protected' => [
                        [
                            'Shopware\\Core\\Framework\\Api\\Context\\AdminApiSource',
                        ],
                    ],
                    'extension' => true,
                ],
                'localField' => 'id',
                'referenceField' => 'createdByUserId',
                'primary' => 'id',
            ],
            "(new Association('createdNotifications', Association::ONE_TO_MANY, 'notification', 'id', 'createdByUserId', 'id', null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new Extension())",
        ];

        yield [
            'translations',
            [
                'type' => 'association',
                "relation" => 'one_to_many',
                "entity" => 'category_translation',
                'flags' => [
                    'read_protected' => [
                        [
                            'Shopware\\Core\\Framework\\Api\\Context\\AdminApiSource',
                            'Shopware\\Core\\Framework\\Api\\Context\\SalesChannelApiSource',
                        ],
                    ],
                    'cascade_delete' => true,
                    'required' => true,
                ],
                'localField' => 'id',
                'referenceField' => 'categoryId',
                'primary' => 'categoryId',
            ],
            "(new Association('translations', Association::ONE_TO_MANY, 'category_translation', 'id', 'categoryId', 'categoryId', null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new CascadeDelete(), new Required())",
        ];
    }
}
