<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Test\Code\Entity;

use PHPUnit\Framework\TestCase;
use Swaggest\ShopwareSdk\Code\Entity\TypeHintResolver;
use Swaggest\ShopwareSdk\Schema\Association;
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
    public function testResolve(Field|Association $field, string $expected): void
    {
        $actual = $this->typeHintResolver->resolve($field);

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
        yield [new Association('recoveryCustomer', Association::ONE_TO_ONE, 'customer_recovery', 'id', 'customerId', null, null, null, null), 'CustomerRecoveryEntity'];
        yield [new Association('translations', Association::ONE_TO_MANY, 'salutation_translation', 'id', 'salutationId', 'salutationId', null, null, null), 'SalutationTranslationCollection'];
        yield [new Association('parent', Association::MANY_TO_ONE, 'category', 'parentId', 'id', null, null, null, null), 'CategoryEntity'];
        yield [new Association('currencies', Association::MANY_TO_MANY, 'currency', 'id', 'id', null, 'sales_channel_currency', 'currencyId', 'salesChannelId'), 'CurrencyCollection'];
    }
}
