<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\CustomerWishlist;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(CustomerWishlistEntity $entity)
 * @method void set(string $key, CustomerWishlistEntity $entity)
 * @method CustomerWishlistEntity[] getIterator()
 * @method CustomerWishlistEntity[] getElements()
 * @method CustomerWishlistEntity|null get(string $key)
 * @method CustomerWishlistEntity|null first()
 * @method CustomerWishlistEntity|null last()
 */
final class CustomerWishlistCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return CustomerWishlistEntity::class;
    }
}
