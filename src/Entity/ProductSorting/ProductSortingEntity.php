<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\ProductSorting;

use Swaggest\ShopwareSdk\Entity\Entity;
use Swaggest\ShopwareSdk\Entity\EntityIdTrait;
use Swaggest\ShopwareSdk\Entity\ProductSortingTranslation\ProductSortingTranslationCollection;

final class ProductSortingEntity extends Entity
{
    use EntityIdTrait;

    protected ?bool $locked;

    protected string $key;

    protected int $priority;

    protected bool $active;

    protected array $fields;

    protected string $label;

    protected ProductSortingTranslationCollection $translations;

    public function getLocked(): ?bool
    {
        return $this->locked;
    }

    public function setLocked(?bool $locked): void
    {
        $this->locked = $locked;
    }

    public function getKey(): string
    {
        return $this->key;
    }

    public function setKey(string $key): void
    {
        $this->key = $key;
    }

    public function getPriority(): int
    {
        return $this->priority;
    }

    public function setPriority(int $priority): void
    {
        $this->priority = $priority;
    }

    public function getActive(): bool
    {
        return $this->active;
    }

    public function setActive(bool $active): void
    {
        $this->active = $active;
    }

    public function getFields(): array
    {
        return $this->fields;
    }

    public function setFields(array $fields): void
    {
        $this->fields = $fields;
    }

    public function getLabel(): string
    {
        return $this->label;
    }

    public function setLabel(string $label): void
    {
        $this->label = $label;
    }

    public function getTranslations(): ProductSortingTranslationCollection
    {
        return $this->translations;
    }

    public function setTranslations(ProductSortingTranslationCollection $translations): void
    {
        $this->translations = $translations;
    }
}
