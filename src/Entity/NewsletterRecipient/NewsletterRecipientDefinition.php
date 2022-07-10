<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\NewsletterRecipient;

use Swaggest\ShopwareSdk\Entity\AbstractEntityDefinition;
use Swaggest\ShopwareSdk\Schema\AssociationField;
use Swaggest\ShopwareSdk\Schema\Field;
use Swaggest\ShopwareSdk\Schema\Flag\PrimaryKey;
use Swaggest\ShopwareSdk\Schema\Flag\ProtectedFlag;
use Swaggest\ShopwareSdk\Schema\Flag\ReadProtected;
use Swaggest\ShopwareSdk\Schema\Flag\Required;

final class NewsletterRecipientDefinition extends AbstractEntityDefinition
{
    public function getEntityName(): string
    {
        return 'newsletter_recipient';
    }

    public function getCollectionClass(): string
    {
        return NewsletterRecipientCollection::class;
    }

    public function getEntityClass(): string
    {
        return NewsletterRecipientEntity::class;
    }

    public function defineFields(): array
    {
        return [
            (new Field('id', 'uuid'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new PrimaryKey(), new Required()),
            (new Field('email', 'string'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new Required()),
            (new Field('title', 'string'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new Field('firstName', 'string'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new Field('lastName', 'string'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new Field('zipCode', 'string'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new Field('city', 'string'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new Field('street', 'string'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new Field('status', 'string'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new Required()),
            (new Field('hash', 'string'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new Required()),
            (new Field('customFields', 'json_object'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new Field('confirmedAt', 'date'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new AssociationField('tags', AssociationField::MANY_TO_MANY, 'tag', 'id', 'id', null, 'newsletter_recipient_tag', 'tagId', 'newsletterRecipientId'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new Field('salutationId', 'uuid'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new AssociationField('salutation', AssociationField::MANY_TO_ONE, 'salutation', 'salutationId', 'id', null, null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new Field('languageId', 'uuid'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new Required()),
            (new AssociationField('language', AssociationField::MANY_TO_ONE, 'language', 'languageId', 'id', null, null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new Field('salesChannelId', 'uuid'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new Required()),
            (new AssociationField('salesChannel', AssociationField::MANY_TO_ONE, 'sales_channel', 'salesChannelId', 'id', null, null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new Field('createdAt', 'date'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new Required()),
            (new Field('updatedAt', 'date'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API])),
        ];
    }
}
