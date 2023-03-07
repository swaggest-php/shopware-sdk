<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\LandingPageSalesChannel;

use Swaggest\ShopwareSdk\Entity\AbstractEntityDefinition;
use Swaggest\ShopwareSdk\Schema\AssociationField;
use Swaggest\ShopwareSdk\Schema\Field;
use Swaggest\ShopwareSdk\Schema\Flag\PrimaryKey;
use Swaggest\ShopwareSdk\Schema\Flag\ProtectedFlag;
use Swaggest\ShopwareSdk\Schema\Flag\ReadProtected;
use Swaggest\ShopwareSdk\Schema\Flag\Required;

final class LandingPageSalesChannelDefinition extends AbstractEntityDefinition
{
    public function getEntityName(): string
    {
        return 'landing_page_sales_channel';
    }

    public function getCollectionClass(): string
    {
        return LandingPageSalesChannelCollection::class;
    }

    public function getEntityClass(): string
    {
        return LandingPageSalesChannelEntity::class;
    }

    protected function defineFields(): array
    {
        return [
            (new Field('landingPageId', 'uuid'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new PrimaryKey(), new Required()),
            (new Field('landingPageVersionId', 'uuid'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new PrimaryKey(), new Required()),
            (new Field('salesChannelId', 'uuid'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new PrimaryKey(), new Required()),
            (new AssociationField('landingPage', AssociationField::MANY_TO_ONE, 'landing_page', 'landingPageId', 'id', null, null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new AssociationField('salesChannel', AssociationField::MANY_TO_ONE, 'sales_channel', 'salesChannelId', 'id', null, null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
        ];
    }
}
