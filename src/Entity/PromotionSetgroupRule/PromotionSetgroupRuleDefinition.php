<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\PromotionSetgroupRule;

use Swaggest\ShopwareSdk\Entity\AbstractEntityDefinition;
use Swaggest\ShopwareSdk\Schema\AssociationField;
use Swaggest\ShopwareSdk\Schema\Field;
use Swaggest\ShopwareSdk\Schema\Flag\PrimaryKey;
use Swaggest\ShopwareSdk\Schema\Flag\ProtectedFlag;
use Swaggest\ShopwareSdk\Schema\Flag\ReadProtected;
use Swaggest\ShopwareSdk\Schema\Flag\Required;

final class PromotionSetgroupRuleDefinition extends AbstractEntityDefinition
{
    public function getEntityName(): string
    {
        return 'promotion_setgroup_rule';
    }

    public function getCollectionClass(): string
    {
        return PromotionSetgroupRuleCollection::class;
    }

    public function getEntityClass(): string
    {
        return PromotionSetgroupRuleEntity::class;
    }

    protected function defineFields(): array
    {
        return [
            (new Field('setgroupId', 'uuid'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new PrimaryKey(), new Required()),
            (new Field('ruleId', 'uuid'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new PrimaryKey(), new Required()),
            (new AssociationField('setgroup', AssociationField::MANY_TO_ONE, 'promotion_setgroup', 'setgroupId', 'id', null, null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new AssociationField('rule', AssociationField::MANY_TO_ONE, 'rule', 'ruleId', 'id', null, null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
        ];
    }
}
