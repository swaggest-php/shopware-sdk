<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\MailTemplateTranslation;

use Swaggest\ShopwareSdk\Entity\AbstractEntityDefinition;
use Swaggest\ShopwareSdk\Schema\AssociationField;
use Swaggest\ShopwareSdk\Schema\Field;
use Swaggest\ShopwareSdk\Schema\Flag\AllowHtml;
use Swaggest\ShopwareSdk\Schema\Flag\PrimaryKey;
use Swaggest\ShopwareSdk\Schema\Flag\ProtectedFlag;
use Swaggest\ShopwareSdk\Schema\Flag\ReadProtected;
use Swaggest\ShopwareSdk\Schema\Flag\Required;

final class MailTemplateTranslationDefinition extends AbstractEntityDefinition
{
    public function getEntityName(): string
    {
        return 'mail_template_translation';
    }

    public function getCollectionClass(): string
    {
        return MailTemplateTranslationCollection::class;
    }

    public function getEntityClass(): string
    {
        return MailTemplateTranslationEntity::class;
    }

    public function defineFields(): array
    {
        return [
            (new Field('senderName', 'string'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API])),
            (new Field('description', 'text'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API])),
            (new Field('subject', 'string'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new Required(), new AllowHtml()),
            (new Field('contentHtml', 'text'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new Required(), new AllowHtml()),
            (new Field('contentPlain', 'text'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new Required(), new AllowHtml()),
            (new Field('customFields', 'json_object'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API])),
            (new Field('createdAt', 'date'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new Required()),
            (new Field('updatedAt', 'date'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API])),
            (new Field('mailTemplateId', 'uuid'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new PrimaryKey(), new Required()),
            (new Field('languageId', 'uuid'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new PrimaryKey(), new Required()),
            (new AssociationField('mailTemplate', AssociationField::MANY_TO_ONE, 'mail_template', 'mailTemplateId', 'id', null, null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new AssociationField('language', AssociationField::MANY_TO_ONE, 'language', 'languageId', 'id', null, null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
        ];
    }
}
