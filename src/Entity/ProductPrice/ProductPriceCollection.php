<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\ProductPrice;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(ProductPriceEntity $entity)
 * @method void set(string $key, ProductPriceEntity $entity)
 * @method ProductPriceEntity[] getIterator()
 * @method ProductPriceEntity[] getElements()
 * @method ProductPriceEntity|null get(string $key)
 * @method ProductPriceEntity|null first()
 * @method ProductPriceEntity|null last()
 */
final class ProductPriceCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return ProductPriceEntity::class;
    }
}
