<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\CustomerWishlistProduct;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(CustomerWishlistProductEntity $entity)
 * @method void set(string $key, CustomerWishlistProductEntity $entity)
 * @method CustomerWishlistProductEntity[] getIterator()
 * @method CustomerWishlistProductEntity[] getElements()
 * @method CustomerWishlistProductEntity|null get(string $key)
 * @method CustomerWishlistProductEntity|null first()
 * @method CustomerWishlistProductEntity|null last()
 */
final class CustomerWishlistProductCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return CustomerWishlistProductEntity::class;
    }
}
