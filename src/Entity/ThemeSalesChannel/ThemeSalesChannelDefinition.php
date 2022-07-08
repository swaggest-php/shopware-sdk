<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\ThemeSalesChannel;

use Swaggest\ShopwareSdk\Entity\EntityDefinitionInterface;
use Swaggest\ShopwareSdk\Schema\Association;
use Swaggest\ShopwareSdk\Schema\Field;
use Swaggest\ShopwareSdk\Schema\Flag\PrimaryKey;
use Swaggest\ShopwareSdk\Schema\Flag\ProtectedFlag;
use Swaggest\ShopwareSdk\Schema\Flag\ReadProtected;
use Swaggest\ShopwareSdk\Schema\Flag\Required;

final class ThemeSalesChannelDefinition implements EntityDefinitionInterface
{
    public function getEntityName(): string
    {
        return 'theme_sales_channel';
    }

    public function getCollectionClass(): string
    {
        return ThemeSalesChannelCollection::class;
    }

    public function getEntityClass(): string
    {
        return ThemeSalesChannelEntity::class;
    }

    public function defineFields(): array
    {
        return [
            (new Field('salesChannelId', 'uuid'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new PrimaryKey(), new Required()),
            (new Field('themeId', 'uuid'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new Required()),
            (new Association('theme', Association::MANY_TO_ONE, 'theme', 'themeId', 'id', null, null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new Association('salesChannel', Association::MANY_TO_ONE, 'sales_channel', 'salesChannelId', 'id', null, null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
        ];
    }
}
