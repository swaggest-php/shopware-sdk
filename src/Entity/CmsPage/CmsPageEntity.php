<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\CmsPage;

use Swaggest\ShopwareSdk\Entity\Category\CategoryCollection;
use Swaggest\ShopwareSdk\Entity\CmsPageTranslation\CmsPageTranslationCollection;
use Swaggest\ShopwareSdk\Entity\CmsSection\CmsSectionCollection;
use Swaggest\ShopwareSdk\Entity\Entity;
use Swaggest\ShopwareSdk\Entity\EntityIdTrait;
use Swaggest\ShopwareSdk\Entity\LandingPage\LandingPageCollection;
use Swaggest\ShopwareSdk\Entity\Media\MediaEntity;
use Swaggest\ShopwareSdk\Entity\Product\ProductCollection;
use Swaggest\ShopwareSdk\Entity\SalesChannel\SalesChannelCollection;

final class CmsPageEntity extends Entity
{
    use EntityIdTrait;

    protected ?string $name;

    protected string $type;

    protected ?string $entity;

    protected array $config;

    protected ?string $previewMediaId;

    protected array $customFields;

    protected bool $locked;

    protected ?CmsSectionCollection $sections;

    protected ?CmsPageTranslationCollection $translations;

    protected ?MediaEntity $previewMedia;

    protected ?CategoryCollection $categories;

    protected ?LandingPageCollection $landingPages;

    protected ?SalesChannelCollection $homeSalesChannels;

    protected ?ProductCollection $products;

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): void
    {
        $this->type = $type;
    }

    public function getEntity(): ?string
    {
        return $this->entity;
    }

    public function setEntity(?string $entity): void
    {
        $this->entity = $entity;
    }

    public function getConfig(): array
    {
        return $this->config;
    }

    public function setConfig(array $config): void
    {
        $this->config = $config;
    }

    public function getPreviewMediaId(): ?string
    {
        return $this->previewMediaId;
    }

    public function setPreviewMediaId(?string $previewMediaId): void
    {
        $this->previewMediaId = $previewMediaId;
    }

    public function getCustomFields(): array
    {
        return $this->customFields;
    }

    public function setCustomFields(array $customFields): void
    {
        $this->customFields = $customFields;
    }

    public function getLocked(): bool
    {
        return $this->locked;
    }

    public function setLocked(bool $locked): void
    {
        $this->locked = $locked;
    }

    public function getSections(): ?CmsSectionCollection
    {
        return $this->sections;
    }

    public function setSections(?CmsSectionCollection $sections): void
    {
        $this->sections = $sections;
    }

    public function getTranslations(): ?CmsPageTranslationCollection
    {
        return $this->translations;
    }

    public function setTranslations(?CmsPageTranslationCollection $translations): void
    {
        $this->translations = $translations;
    }

    public function getPreviewMedia(): ?MediaEntity
    {
        return $this->previewMedia;
    }

    public function setPreviewMedia(?MediaEntity $previewMedia): void
    {
        $this->previewMedia = $previewMedia;
    }

    public function getCategories(): ?CategoryCollection
    {
        return $this->categories;
    }

    public function setCategories(?CategoryCollection $categories): void
    {
        $this->categories = $categories;
    }

    public function getLandingPages(): ?LandingPageCollection
    {
        return $this->landingPages;
    }

    public function setLandingPages(?LandingPageCollection $landingPages): void
    {
        $this->landingPages = $landingPages;
    }

    public function getHomeSalesChannels(): ?SalesChannelCollection
    {
        return $this->homeSalesChannels;
    }

    public function setHomeSalesChannels(?SalesChannelCollection $homeSalesChannels): void
    {
        $this->homeSalesChannels = $homeSalesChannels;
    }

    public function getProducts(): ?ProductCollection
    {
        return $this->products;
    }

    public function setProducts(?ProductCollection $products): void
    {
        $this->products = $products;
    }
}
