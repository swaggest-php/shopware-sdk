<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\MailTemplateType;

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
use Swaggest\ShopwareSdk\Schema\Flag\SetNullOnDelete;
use Swaggest\ShopwareSdk\Schema\Flag\Translatable;

final class MailTemplateTypeDefinition extends AbstractEntityDefinition
{
    public function getEntityName(): string
    {
        return 'mail_template_type';
    }

    public function getCollectionClass(): string
    {
        return MailTemplateTypeCollection::class;
    }

    public function getEntityClass(): string
    {
        return MailTemplateTypeEntity::class;
    }

    public function defineFields(): array
    {
        return [
            (new Field('id', 'uuid'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new PrimaryKey(), new Required()),
            (new Field('name', 'string'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new Required(), new SearchRanking(250.000000), new Translatable()),
            (new Field('technicalName', 'string'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new Required()),
            (new Field('availableEntities', 'json_object'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new Field('customFields', 'json_object'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new Translatable()),
            (new AssociationField('translations', AssociationField::ONE_TO_MANY, 'mail_template_type_translation', 'id', 'mailTemplateTypeId', 'mailTemplateTypeId', null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new CascadeDelete(), new Required()),
            (new AssociationField('mailTemplates', AssociationField::ONE_TO_MANY, 'mail_template', 'id', 'mailTemplateTypeId', 'id', null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new SetNullOnDelete()),
            (new Field('templateData', 'json_object'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new Field('createdAt', 'date'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new Required()),
            (new Field('updatedAt', 'date'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API])),
            (new Field('translated', 'json_object'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new Computed(), new Runtime()),
        ];
    }
}
