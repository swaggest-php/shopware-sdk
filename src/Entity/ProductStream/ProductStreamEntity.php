<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\ProductStream;

use Swaggest\ShopwareSdk\Entity\Category\CategoryCollection;
use Swaggest\ShopwareSdk\Entity\Entity;
use Swaggest\ShopwareSdk\Entity\EntityIdTrait;
use Swaggest\ShopwareSdk\Entity\ProductCrossSelling\ProductCrossSellingCollection;
use Swaggest\ShopwareSdk\Entity\ProductExport\ProductExportCollection;
use Swaggest\ShopwareSdk\Entity\ProductStreamFilter\ProductStreamFilterCollection;
use Swaggest\ShopwareSdk\Entity\ProductStreamTranslation\ProductStreamTranslationCollection;

final class ProductStreamEntity extends Entity
{
    use EntityIdTrait;

    protected array $apiFilter;

    protected bool $invalid;

    protected string $name;

    protected ?string $description;

    protected array $customFields;

    protected ProductStreamTranslationCollection $translations;

    protected ?ProductStreamFilterCollection $filters;

    protected ?ProductCrossSellingCollection $productCrossSellings;

    protected ?ProductExportCollection $productExports;

    protected ?CategoryCollection $categories;

    public function getApiFilter(): array
    {
        return $this->apiFilter;
    }

    public function setApiFilter(array $apiFilter): void
    {
        $this->apiFilter = $apiFilter;
    }

    public function getInvalid(): bool
    {
        return $this->invalid;
    }

    public function setInvalid(bool $invalid): void
    {
        $this->invalid = $invalid;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }

    public function getCustomFields(): array
    {
        return $this->customFields;
    }

    public function setCustomFields(array $customFields): void
    {
        $this->customFields = $customFields;
    }

    public function getTranslations(): ProductStreamTranslationCollection
    {
        return $this->translations;
    }

    public function setTranslations(ProductStreamTranslationCollection $translations): void
    {
        $this->translations = $translations;
    }

    public function getFilters(): ?ProductStreamFilterCollection
    {
        return $this->filters;
    }

    public function setFilters(?ProductStreamFilterCollection $filters): void
    {
        $this->filters = $filters;
    }

    public function getProductCrossSellings(): ?ProductCrossSellingCollection
    {
        return $this->productCrossSellings;
    }

    public function setProductCrossSellings(?ProductCrossSellingCollection $productCrossSellings): void
    {
        $this->productCrossSellings = $productCrossSellings;
    }

    public function getProductExports(): ?ProductExportCollection
    {
        return $this->productExports;
    }

    public function setProductExports(?ProductExportCollection $productExports): void
    {
        $this->productExports = $productExports;
    }

    public function getCategories(): ?CategoryCollection
    {
        return $this->categories;
    }

    public function setCategories(?CategoryCollection $categories): void
    {
        $this->categories = $categories;
    }
}
