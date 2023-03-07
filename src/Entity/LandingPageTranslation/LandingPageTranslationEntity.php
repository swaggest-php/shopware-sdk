<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\LandingPageTranslation;

use Swaggest\ShopwareSdk\Entity\Entity;
use Swaggest\ShopwareSdk\Entity\LandingPage\LandingPageEntity;
use Swaggest\ShopwareSdk\Entity\Language\LanguageEntity;

final class LandingPageTranslationEntity extends Entity
{
    protected string $name;

    protected string $url;

    protected ?array $slotConfig;

    protected ?string $metaTitle;

    protected ?string $metaDescription;

    protected ?string $keywords;

    protected ?array $customFields;

    protected string $landingPageId;

    protected string $languageId;

    protected ?LandingPageEntity $landingPage;

    protected ?LanguageEntity $language;

    protected ?string $landingPageVersionId;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function setUrl(string $url): void
    {
        $this->url = $url;
    }

    public function getSlotConfig(): ?array
    {
        return $this->slotConfig;
    }

    public function setSlotConfig(?array $slotConfig): void
    {
        $this->slotConfig = $slotConfig;
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

    public function getLandingPageId(): string
    {
        return $this->landingPageId;
    }

    public function setLandingPageId(string $landingPageId): void
    {
        $this->landingPageId = $landingPageId;
    }

    public function getLanguageId(): string
    {
        return $this->languageId;
    }

    public function setLanguageId(string $languageId): void
    {
        $this->languageId = $languageId;
    }

    public function getLandingPage(): ?LandingPageEntity
    {
        return $this->landingPage;
    }

    public function setLandingPage(?LandingPageEntity $landingPage): void
    {
        $this->landingPage = $landingPage;
    }

    public function getLanguage(): ?LanguageEntity
    {
        return $this->language;
    }

    public function setLanguage(?LanguageEntity $language): void
    {
        $this->language = $language;
    }

    public function getLandingPageVersionId(): ?string
    {
        return $this->landingPageVersionId;
    }

    public function setLandingPageVersionId(?string $landingPageVersionId): void
    {
        $this->landingPageVersionId = $landingPageVersionId;
    }
}
