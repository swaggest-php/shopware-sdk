<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\DocumentBaseConfigSalesChannel;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(DocumentBaseConfigSalesChannelEntity $entity)
 * @method void set(string $key, DocumentBaseConfigSalesChannelEntity $entity)
 * @method DocumentBaseConfigSalesChannelEntity[] getIterator()
 * @method DocumentBaseConfigSalesChannelEntity[] getElements()
 * @method DocumentBaseConfigSalesChannelEntity|null get(string $key)
 * @method DocumentBaseConfigSalesChannelEntity|null first()
 * @method DocumentBaseConfigSalesChannelEntity|null last()
 */
final class DocumentBaseConfigSalesChannelCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return DocumentBaseConfigSalesChannelEntity::class;
    }
}
