<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\CategoryTranslation;

use Swaggest\ShopwareSdk\Entity\Category\CategoryEntity;
use Swaggest\ShopwareSdk\Entity\Entity;
use Swaggest\ShopwareSdk\Entity\EntityIdTrait;
use Swaggest\ShopwareSdk\Entity\Language\LanguageEntity;

final class CategoryTranslationEntity extends Entity
{
    use EntityIdTrait;

    protected string $name;

    protected ?array $breadcrumb;

    protected ?array $slotConfig;

    protected ?string $linkType;

    protected ?string $internalLink;

    protected ?string $externalLink;

    protected ?bool $linkNewTab;

    protected ?string $description;

    protected ?string $metaTitle;

    protected ?string $metaDescription;

    protected ?string $keywords;

    protected ?array $customFields;

    protected string $categoryId;

    protected string $languageId;

    protected ?CategoryEntity $category;

    protected ?LanguageEntity $language;

    protected ?string $categoryVersionId;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getBreadcrumb(): ?array
    {
        return $this->breadcrumb;
    }

    public function setBreadcrumb(?array $breadcrumb): void
    {
        $this->breadcrumb = $breadcrumb;
    }

    public function getSlotConfig(): ?array
    {
        return $this->slotConfig;
    }

    public function setSlotConfig(?array $slotConfig): void
    {
        $this->slotConfig = $slotConfig;
    }

    public function getLinkType(): ?string
    {
        return $this->linkType;
    }

    public function setLinkType(?string $linkType): void
    {
        $this->linkType = $linkType;
    }

    public function getInternalLink(): ?string
    {
        return $this->internalLink;
    }

    public function setInternalLink(?string $internalLink): void
    {
        $this->internalLink = $internalLink;
    }

    public function getExternalLink(): ?string
    {
        return $this->externalLink;
    }

    public function setExternalLink(?string $externalLink): void
    {
        $this->externalLink = $externalLink;
    }

    public function getLinkNewTab(): ?bool
    {
        return $this->linkNewTab;
    }

    public function setLinkNewTab(?bool $linkNewTab): void
    {
        $this->linkNewTab = $linkNewTab;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }

    public function getMetaTitle(): ?string
    {
        return $this->metaTitle;
    }

    public function setMetaTitle(?string $metaTitle): void
    {
        $this->metaTitle = $metaTitle;
    }

    public function getMetaDescription(): ?string
    {
        return $this->metaDescription;
    }

    public function setMetaDescription(?string $metaDescription): void
    {
        $this->metaDescription = $metaDescription;
    }

    public function getKeywords(): ?string
    {
        return $this->keywords;
    }

    public function setKeywords(?string $keywords): void
    {
        $this->keywords = $keywords;
    }

    public function getCustomFields(): ?array
    {
        return $this->customFields;
    }

    public function setCustomFields(?array $customFields): void
    {
        $this->customFields = $customFields;
    }

    public function getCategoryId(): string
    {
        return $this->categoryId;
    }

    public function setCategoryId(string $categoryId): void
    {
        $this->categoryId = $categoryId;
    }

    public function getLanguageId(): string
    {
        return $this->languageId;
    }

    public function setLanguageId(string $languageId): void
    {
        $this->languageId = $languageId;
    }

    public function getCategory(): ?CategoryEntity
    {
        return $this->category;
    }

    public function setCategory(?CategoryEntity $category): void
    {
        $this->category = $category;
    }

    public function getLanguage(): ?LanguageEntity
    {
        return $this->language;
    }

    public function setLanguage(?LanguageEntity $language): void
    {
        $this->language = $language;
    }

    public function getCategoryVersionId(): ?string
    {
        return $this->categoryVersionId;
    }

    public function setCategoryVersionId(?string $categoryVersionId): void
    {
        $this->categoryVersionId = $categoryVersionId;
    }
}
