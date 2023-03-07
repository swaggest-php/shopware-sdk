<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\NewsletterRecipientTag;

use Swaggest\ShopwareSdk\Entity\AbstractEntityDefinition;
use Swaggest\ShopwareSdk\Schema\AssociationField;
use Swaggest\ShopwareSdk\Schema\Field;
use Swaggest\ShopwareSdk\Schema\Flag\PrimaryKey;
use Swaggest\ShopwareSdk\Schema\Flag\ProtectedFlag;
use Swaggest\ShopwareSdk\Schema\Flag\ReadProtected;
use Swaggest\ShopwareSdk\Schema\Flag\Required;

final class NewsletterRecipientTagDefinition extends AbstractEntityDefinition
{
    public function getEntityName(): string
    {
        return 'newsletter_recipient_tag';
    }

    public function getCollectionClass(): string
    {
        return NewsletterRecipientTagCollection::class;
    }

    public function getEntityClass(): string
    {
        return NewsletterRecipientTagEntity::class;
    }

    protected function defineFields(): array
    {
        return [
            (new Field('newsletterRecipientId', 'uuid'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new PrimaryKey(), new Required()),
            (new Field('tagId', 'uuid'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new PrimaryKey(), new Required()),
            (new AssociationField('newsletterRecipient', AssociationField::MANY_TO_ONE, 'newsletter_recipient', 'newsletterRecipientId', 'id', null, null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new AssociationField('tag', AssociationField::MANY_TO_ONE, 'tag', 'tagId', 'id', null, null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
        ];
    }
}
