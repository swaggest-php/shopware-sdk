<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\Rule;

use Swaggest\ShopwareSdk\Entity\EntityDefinitionInterface;
use Swaggest\ShopwareSdk\Schema\Association;
use Swaggest\ShopwareSdk\Schema\Field;
use Swaggest\ShopwareSdk\Schema\Flag\CascadeDelete;
use Swaggest\ShopwareSdk\Schema\Flag\Deprecated;
use Swaggest\ShopwareSdk\Schema\Flag\PrimaryKey;
use Swaggest\ShopwareSdk\Schema\Flag\ProtectedFlag;
use Swaggest\ShopwareSdk\Schema\Flag\ReadProtected;
use Swaggest\ShopwareSdk\Schema\Flag\Required;
use Swaggest\ShopwareSdk\Schema\Flag\RestrictDelete;
use Swaggest\ShopwareSdk\Schema\Flag\WriteProtected;

final class RuleDefinition implements EntityDefinitionInterface
{
    public function getEntityName(): string
    {
        return 'rule';
    }

    public function getCollectionClass(): string
    {
        return RuleCollection::class;
    }

    public function getEntityClass(): string
    {
        return RuleEntity::class;
    }

    public function defineFields(): array
    {
        return [
            (new Field('id', 'uuid'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new PrimaryKey(), new Required()),
            (new Field('name', 'string'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new Required()),
            (new Field('priority', 'int'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new Required()),
            (new Field('description', 'text'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API])),
            (new Field('payload', 'blob'))->addFlags(new WriteProtected([ProtectedFlag::SYSTEM])),
            (new Field('invalid', 'boolean'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new WriteProtected([ProtectedFlag::SYSTEM])),
            (new Field('customFields', 'json_object'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API])),
            (new Field('moduleTypes', 'json_object'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new Association('conditions', Association::ONE_TO_MANY, 'rule_condition', 'id', 'ruleId', 'id', null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new CascadeDelete()),
            (new Association('productPrices', Association::ONE_TO_MANY, 'product_price', 'id', 'ruleId', 'id', null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new RestrictDelete()),
            (new Association('shippingMethodPrices', Association::ONE_TO_MANY, 'shipping_method_price', 'id', 'ruleId', 'id', null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new RestrictDelete()),
            (new Association('shippingMethodPriceCalculations', Association::ONE_TO_MANY, 'shipping_method_price', 'id', 'calculationRuleId', 'id', null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new RestrictDelete()),
            (new Association('shippingMethods', Association::ONE_TO_MANY, 'shipping_method', 'id', 'availabilityRuleId', 'id', null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new RestrictDelete()),
            (new Association('paymentMethods', Association::ONE_TO_MANY, 'payment_method', 'id', 'availabilityRuleId', 'id', null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new RestrictDelete()),
            (new Association('personaPromotions', Association::MANY_TO_MANY, 'promotion', 'id', 'id', null, 'promotion_persona_rule', 'promotionId', 'ruleId'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new RestrictDelete()),
            (new Association('flowSequences', Association::ONE_TO_MANY, 'flow_sequence', 'id', 'ruleId', 'id', null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new RestrictDelete()),
            (new Association('orderPromotions', Association::MANY_TO_MANY, 'promotion', 'id', 'id', null, 'promotion_order_rule', 'promotionId', 'ruleId'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new RestrictDelete()),
            (new Association('cartPromotions', Association::MANY_TO_MANY, 'promotion', 'id', 'id', null, 'promotion_cart_rule', 'promotionId', 'ruleId'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new RestrictDelete()),
            (new Association('promotionDiscounts', Association::MANY_TO_MANY, 'promotion_discount', 'id', 'id', null, 'promotion_discount_rule', 'discountId', 'ruleId'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new RestrictDelete()),
            (new Association('promotionSetGroups', Association::MANY_TO_MANY, 'promotion_setgroup', 'id', 'id', null, 'promotion_setgroup_rule', 'setgroupId', 'ruleId'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new RestrictDelete()),
            (new Association('eventActions', Association::MANY_TO_MANY, 'event_action', 'id', 'id', null, 'event_action_rule', 'eventActionId', 'ruleId'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new CascadeDelete(), new Deprecated('v6.4.6', 'v6.5.0', null)),
            (new Field('createdAt', 'date'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new Required()),
            (new Field('updatedAt', 'date'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API])),
        ];
    }
}
