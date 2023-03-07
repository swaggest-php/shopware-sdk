<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Test\Code\Entity;

use PHPUnit\Framework\TestCase;
use Swaggest\ShopwareSdk\Code\Entity\TypeHintResolver;
use Swaggest\ShopwareSdk\Entity\AbstractEntityDefinition;
use Swaggest\ShopwareSdk\Schema\AbstractField;
use Swaggest\ShopwareSdk\Schema\AssociationField;
use Swaggest\ShopwareSdk\Schema\Field;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;

final class TypeHintResolverTest extends TestCase
{
    private TypeHintResolver $typeHintResolver;

    protected function setUp(): void
    {
        $this->typeHintResolver = new TypeHintResolver(
            $this->createMock(EventDispatcherInterface::class)
        );
    }

    /**
     * @dataProvider provideFieldData
     */
    public function testResolve(AbstractField $field, string $expected): void
    {
        $actual = $this->typeHintResolver->resolve($field, $this->createMock(AbstractEntityDefinition::class));

        self::assertSame($expected, $actual);
    }

    public function provideFieldData(): iterable
    {
        yield [new Field('path', 'string'), 'string'];
        yield [new Field('iconRaw', 'blob'), 'string'];
        yield [new Field('password', 'password'), 'string'];
        yield [new Field('template', 'text'), 'string'];
        yield [new Field('id', 'uuid'), 'string'];
        yield [new Field('remoteAddress', 'Shopware\Core\Framework\DataAbstractionLayer\Field\RemoteAddressField'), 'string'];
        yield [new Field('childCount', 'int'), 'int'];
        yield [new Field('quantityStart', 'float'), 'float'];
        yield [new Field('active', 'boolean'), 'bool'];
        yield [new Field('categoryTree', 'json_list'), 'array'];
        yield [new Field('block', 'json_object'), 'array'];
        yield [new Field('createdAt', 'date'), '\DateTimeInterface'];
        yield [new AssociationField('recoveryCustomer', AssociationField::ONE_TO_ONE, 'customer_recovery', 'id', 'customerId', null, null, null, null), 'CustomerRecoveryEntity'];
        yield [new AssociationField('translations', AssociationField::ONE_TO_MANY, 'salutation_translation', 'id', 'salutationId', 'salutationId', null, null, null), 'SalutationTranslationCollection'];
        yield [new AssociationField('parent', AssociationField::MANY_TO_ONE, 'category', 'parentId', 'id', null, null, null, null), 'CategoryEntity'];
        yield [new AssociationField('currencies', AssociationField::MANY_TO_MANY, 'currency', 'id', 'id', null, 'sales_channel_currency', 'currencyId', 'salesChannelId'), 'CurrencyCollection'];
    }
}
