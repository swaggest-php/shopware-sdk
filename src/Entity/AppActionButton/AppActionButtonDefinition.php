<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\AppActionButton;

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
use Swaggest\ShopwareSdk\Schema\Flag\Translatable;

final class AppActionButtonDefinition extends AbstractEntityDefinition
{
    public function getEntityName(): string
    {
        return 'app_action_button';
    }

    public function getCollectionClass(): string
    {
        return AppActionButtonCollection::class;
    }

    public function getEntityClass(): string
    {
        return AppActionButtonEntity::class;
    }

    public function defineFields(): array
    {
        return [
            (new Field('id', 'uuid'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new PrimaryKey(), new Required()),
            (new Field('entity', 'string'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new Required()),
            (new Field('view', 'string'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new Required()),
            (new Field('url', 'string'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new Required()),
            (new Field('action', 'string'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new Required()),
            (new Field('openNewTab', 'boolean'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new Required()),
            (new Field('label', 'string'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new Required(), new Translatable()),
            (new AssociationField('translations', AssociationField::ONE_TO_MANY, 'app_action_button_translation', 'id', 'appActionButtonId', 'appActionButtonId', null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new CascadeDelete(), new Required()),
            (new Field('appId', 'uuid'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new Required()),
            (new AssociationField('app', AssociationField::MANY_TO_ONE, 'app', 'appId', 'id', null, null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new Field('createdAt', 'date'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new Required()),
            (new Field('updatedAt', 'date'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API])),
            (new Field('translated', 'json_object'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new Computed(), new Runtime()),
        ];
    }
}
