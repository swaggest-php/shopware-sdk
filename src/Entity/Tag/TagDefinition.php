<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\Tag;

use Swaggest\ShopwareSdk\Entity\AbstractEntityDefinition;
use Swaggest\ShopwareSdk\Schema\AssociationField;
use Swaggest\ShopwareSdk\Schema\Field;
use Swaggest\ShopwareSdk\Schema\Flag\PrimaryKey;
use Swaggest\ShopwareSdk\Schema\Flag\ProtectedFlag;
use Swaggest\ShopwareSdk\Schema\Flag\ReadProtected;
use Swaggest\ShopwareSdk\Schema\Flag\Required;
use Swaggest\ShopwareSdk\Schema\Flag\SearchRanking;

final class TagDefinition extends AbstractEntityDefinition
{
    public function getEntityName(): string
    {
        return 'tag';
    }

    public function getCollectionClass(): string
    {
        return TagCollection::class;
    }

    public function getEntityClass(): string
    {
        return TagEntity::class;
    }

    protected function defineFields(): array
    {
        return [
            (new Field('id', 'uuid'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new PrimaryKey(), new Required()),
            (new Field('name', 'string'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new Required(), new SearchRanking(500.000000)),
            (new AssociationField('products', AssociationField::MANY_TO_MANY, 'product', 'id', 'id', null, 'product_tag', 'productId', 'tagId'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new AssociationField('media', AssociationField::MANY_TO_MANY, 'media', 'id', 'id', null, 'media_tag', 'mediaId', 'tagId'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new AssociationField('categories', AssociationField::MANY_TO_MANY, 'category', 'id', 'id', null, 'category_tag', 'categoryId', 'tagId'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new AssociationField('customers', AssociationField::MANY_TO_MANY, 'customer', 'id', 'id', null, 'customer_tag', 'customerId', 'tagId'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new AssociationField('orders', AssociationField::MANY_TO_MANY, 'order', 'id', 'id', null, 'order_tag', 'orderId', 'tagId'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new AssociationField('shippingMethods', AssociationField::MANY_TO_MANY, 'shipping_method', 'id', 'id', null, 'shipping_method_tag', 'shippingMethodId', 'tagId'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new AssociationField('newsletterRecipients', AssociationField::MANY_TO_MANY, 'newsletter_recipient', 'id', 'id', null, 'newsletter_recipient_tag', 'newsletterRecipientId', 'tagId'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new AssociationField('landingPages', AssociationField::MANY_TO_MANY, 'landing_page', 'id', 'id', null, 'landing_page_tag', 'landingPageId', 'tagId'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new Field('createdAt', 'date'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new Required()),
            (new Field('updatedAt', 'date'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API])),
        ];
    }
}
