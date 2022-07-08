<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\CategoryTag;

use Swaggest\ShopwareSdk\Entity\EntityDefinitionInterface;
use Swaggest\ShopwareSdk\Schema\Association;
use Swaggest\ShopwareSdk\Schema\Field;
use Swaggest\ShopwareSdk\Schema\Flag\PrimaryKey;
use Swaggest\ShopwareSdk\Schema\Flag\ProtectedFlag;
use Swaggest\ShopwareSdk\Schema\Flag\ReadProtected;
use Swaggest\ShopwareSdk\Schema\Flag\Required;

final class CategoryTagDefinition implements EntityDefinitionInterface
{
    public function getEntityName(): string
    {
        return 'category_tag';
    }

    public function getCollectionClass(): string
    {
        return CategoryTagCollection::class;
    }

    public function getEntityClass(): string
    {
        return CategoryTagEntity::class;
    }

    public function defineFields(): array
    {
        return [
            (new Field('categoryId', 'uuid'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new PrimaryKey(), new Required()),
            (new Field('categoryVersionId', 'uuid'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new PrimaryKey(), new Required()),
            (new Field('tagId', 'uuid'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new PrimaryKey(), new Required()),
            (new Association('category', Association::MANY_TO_ONE, 'category', 'categoryId', 'id', null, null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new Association('tag', Association::MANY_TO_ONE, 'tag', 'tagId', 'id', null, null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
        ];
    }
}
