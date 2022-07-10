<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\ProductManufacturer;

use Swaggest\ShopwareSdk\Entity\Entity;
use Swaggest\ShopwareSdk\Entity\EntityIdTrait;
use Swaggest\ShopwareSdk\Entity\Media\MediaEntity;
use Swaggest\ShopwareSdk\Entity\Product\ProductCollection;
use Swaggest\ShopwareSdk\Entity\ProductManufacturerTranslation\ProductManufacturerTranslationCollection;

final class ProductManufacturerEntity extends Entity
{
    use EntityIdTrait;

    protected ?string $mediaId;

    protected ?string $link;

    protected string $name;

    protected ?string $description;

    protected ?array $customFields;

    protected ?MediaEntity $media;

    protected ?ProductCollection $products;

    protected ProductManufacturerTranslationCollection $translations;

    public function getMediaId(): ?string
    {
        return $this->mediaId;
    }

    public function setMediaId(?string $mediaId): void
    {
        $this->mediaId = $mediaId;
    }

    public function getLink(): ?string
    {
        return $this->link;
    }

    public function setLink(?string $link): void
    {
        $this->link = $link;
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

    public function getCustomFields(): ?array
    {
        return $this->customFields;
    }

    public function setCustomFields(?array $customFields): void
    {
        $this->customFields = $customFields;
    }

    public function getMedia(): ?MediaEntity
    {
        return $this->media;
    }

    public function setMedia(?MediaEntity $media): void
    {
        $this->media = $media;
    }

    public function getProducts(): ?ProductCollection
    {
        return $this->products;
    }

    public function setProducts(?ProductCollection $products): void
    {
        $this->products = $products;
    }

    public function getTranslations(): ProductManufacturerTranslationCollection
    {
        return $this->translations;
    }

    public function setTranslations(ProductManufacturerTranslationCollection $translations): void
    {
        $this->translations = $translations;
    }
}
