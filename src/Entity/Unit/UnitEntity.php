<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\Unit;

use Swaggest\ShopwareSdk\Entity\Entity;
use Swaggest\ShopwareSdk\Entity\Product\ProductCollection;
use Swaggest\ShopwareSdk\Entity\UnitTranslation\UnitTranslationCollection;

final class UnitEntity extends Entity
{
    protected string $shortCode;

    protected string $name;

    protected ?array $customFields;

    protected ?ProductCollection $products;

    protected ?UnitTranslationCollection $translations;

    public function getShortCode(): string
    {
        return $this->shortCode;
    }

    public function setShortCode(string $shortCode): void
    {
        $this->shortCode = $shortCode;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getCustomFields(): ?array
    {
        return $this->customFields;
    }

    public function setCustomFields(?array $customFields): void
    {
        $this->customFields = $customFields;
    }

    public function getProducts(): ?ProductCollection
    {
        return $this->products;
    }

    public function setProducts(?ProductCollection $products): void
    {
        $this->products = $products;
    }

    public function getTranslations(): ?UnitTranslationCollection
    {
        return $this->translations;
    }

    public function setTranslations(?UnitTranslationCollection $translations): void
    {
        $this->translations = $translations;
    }
}
