<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\ProductReview;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(ProductReviewEntity $entity)
 * @method void set(string $key, ProductReviewEntity $entity)
 * @method ProductReviewEntity[] getIterator()
 * @method ProductReviewEntity[] getElements()
 * @method ProductReviewEntity|null get(string $key)
 * @method ProductReviewEntity|null first()
 * @method ProductReviewEntity|null last()
 */
final class ProductReviewCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return ProductReviewEntity::class;
    }
}
