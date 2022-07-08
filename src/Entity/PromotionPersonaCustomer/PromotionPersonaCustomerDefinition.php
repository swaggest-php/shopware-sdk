<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\PromotionPersonaCustomer;

use Swaggest\ShopwareSdk\Entity\EntityDefinitionInterface;
use Swaggest\ShopwareSdk\Schema\Association;
use Swaggest\ShopwareSdk\Schema\Field;
use Swaggest\ShopwareSdk\Schema\Flag\PrimaryKey;
use Swaggest\ShopwareSdk\Schema\Flag\ProtectedFlag;
use Swaggest\ShopwareSdk\Schema\Flag\ReadProtected;
use Swaggest\ShopwareSdk\Schema\Flag\Required;

final class PromotionPersonaCustomerDefinition implements EntityDefinitionInterface
{
    public function getEntityName(): string
    {
        return 'promotion_persona_customer';
    }

    public function getCollectionClass(): string
    {
        return PromotionPersonaCustomerCollection::class;
    }

    public function getEntityClass(): string
    {
        return PromotionPersonaCustomerEntity::class;
    }

    public function defineFields(): array
    {
        return [
            (new Field('promotionId', 'uuid'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new PrimaryKey(), new Required()),
            (new Field('customerId', 'uuid'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new PrimaryKey(), new Required()),
            (new Association('promotion', Association::MANY_TO_ONE, 'promotion', 'promotionId', 'id', null, null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new Association('customer', Association::MANY_TO_ONE, 'customer', 'customerId', 'id', null, null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
        ];
    }
}
