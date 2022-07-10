<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\Promotion;

use Swaggest\ShopwareSdk\Entity\AbstractEntityDefinition;
use Swaggest\ShopwareSdk\Schema\AssociationField;
use Swaggest\ShopwareSdk\Schema\Field;
use Swaggest\ShopwareSdk\Schema\Flag\CascadeDelete;
use Swaggest\ShopwareSdk\Schema\Flag\Computed;
use Swaggest\ShopwareSdk\Schema\Flag\PrimaryKey;
use Swaggest\ShopwareSdk\Schema\Flag\ProtectedFlag;
use Swaggest\ShopwareSdk\Schema\Flag\ReadProtected;
use Swaggest\ShopwareSdk\Schema\Flag\Required;
use Swaggest\ShopwareSdk\Schema\Flag\Runtime;
use Swaggest\ShopwareSdk\Schema\Flag\SearchRanking;
use Swaggest\ShopwareSdk\Schema\Flag\Translatable;
use Swaggest\ShopwareSdk\Schema\Flag\WriteProtected;

final class PromotionDefinition extends AbstractEntityDefinition
{
    public function getEntityName(): string
    {
        return 'promotion';
    }

    public function getCollectionClass(): string
    {
        return PromotionCollection::class;
    }

    public function getEntityClass(): string
    {
        return PromotionEntity::class;
    }

    public function defineFields(): array
    {
        return [
            (new Field('id', 'uuid'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new PrimaryKey(), new Required()),
            (new Field('name', 'string'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new Required(), new SearchRanking(500.000000), new Translatable()),
            (new Field('active', 'boolean'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new Required()),
            (new Field('validFrom', 'date'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new Field('validUntil', 'date'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new Field('maxRedemptionsGlobal', 'int'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new Field('maxRedemptionsPerCustomer', 'int'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new Field('priority', 'int'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new Required()),
            (new Field('exclusive', 'boolean'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new Required()),
            (new Field('code', 'string'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new Field('useCodes', 'boolean'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new Required()),
            (new Field('useIndividualCodes', 'boolean'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new Required()),
            (new Field('individualCodePattern', 'string'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new Field('useSetGroups', 'boolean'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new Required()),
            (new Field('customerRestriction', 'boolean'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new Field('preventCombination', 'boolean'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new Required()),
            (new Field('orderCount', 'int'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new WriteProtected([ProtectedFlag::SYSTEM])),
            (new Field('ordersPerCustomerCount', 'json_object'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new WriteProtected([ProtectedFlag::SYSTEM])),
            (new AssociationField('setgroups', AssociationField::ONE_TO_MANY, 'promotion_setgroup', 'id', 'promotionId', 'id', null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new CascadeDelete()),
            (new AssociationField('salesChannels', AssociationField::ONE_TO_MANY, 'promotion_sales_channel', 'id', 'promotionId', 'id', null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new CascadeDelete()),
            (new AssociationField('discounts', AssociationField::ONE_TO_MANY, 'promotion_discount', 'id', 'promotionId', 'id', null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new CascadeDelete()),
            (new AssociationField('individualCodes', AssociationField::ONE_TO_MANY, 'promotion_individual_code', 'id', 'promotionId', 'id', null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new CascadeDelete()),
            (new AssociationField('personaRules', AssociationField::MANY_TO_MANY, 'rule', 'id', 'id', null, 'promotion_persona_rule', 'ruleId', 'promotionId'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new CascadeDelete()),
            (new AssociationField('personaCustomers', AssociationField::MANY_TO_MANY, 'customer', 'id', 'id', null, 'promotion_persona_customer', 'customerId', 'promotionId'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new CascadeDelete()),
            (new AssociationField('orderRules', AssociationField::MANY_TO_MANY, 'rule', 'id', 'id', null, 'promotion_order_rule', 'ruleId', 'promotionId'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new CascadeDelete()),
            (new AssociationField('cartRules', AssociationField::MANY_TO_MANY, 'rule', 'id', 'id', null, 'promotion_cart_rule', 'ruleId', 'promotionId'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new CascadeDelete()),
            (new AssociationField('translations', AssociationField::ONE_TO_MANY, 'promotion_translation', 'id', 'promotionId', 'promotionId', null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new CascadeDelete(), new Required()),
            (new Field('exclusionIds', 'json_list'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new Field('customFields', 'json_object'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new Translatable()),
            (new Field('createdAt', 'date'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new Required()),
            (new Field('updatedAt', 'date'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API])),
            (new Field('translated', 'json_object'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new Computed(), new Runtime()),
        ];
    }
}
