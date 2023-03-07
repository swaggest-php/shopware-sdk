<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\ProductSearchConfig;

use Swaggest\ShopwareSdk\Entity\Entity;
use Swaggest\ShopwareSdk\Entity\Language\LanguageEntity;
use Swaggest\ShopwareSdk\Entity\ProductSearchConfigField\ProductSearchConfigFieldCollection;

final class ProductSearchConfigEntity extends Entity
{
    protected string $languageId;

    protected bool $andLogic;

    protected int $minSearchLength;

    protected ?array $excludedTerms;

    protected ?LanguageEntity $language;

    protected ?ProductSearchConfigFieldCollection $configFields;

    public function getLanguageId(): string
    {
        return $this->languageId;
    }

    public function setLanguageId(string $languageId): void
    {
        $this->languageId = $languageId;
    }

    public function getAndLogic(): bool
    {
        return $this->andLogic;
    }

    public function setAndLogic(bool $andLogic): void
    {
        $this->andLogic = $andLogic;
    }

    public function getMinSearchLength(): int
    {
        return $this->minSearchLength;
    }

    public function setMinSearchLength(int $minSearchLength): void
    {
        $this->minSearchLength = $minSearchLength;
    }

    public function getExcludedTerms(): ?array
    {
        return $this->excludedTerms;
    }

    public function setExcludedTerms(?array $excludedTerms): void
    {
        $this->excludedTerms = $excludedTerms;
    }

    public function getLanguage(): ?LanguageEntity
    {
        return $this->language;
    }

    public function setLanguage(?LanguageEntity $language): void
    {
        $this->language = $language;
    }

    public function getConfigFields(): ?ProductSearchConfigFieldCollection
    {
        return $this->configFields;
    }

    public function setConfigFields(?ProductSearchConfigFieldCollection $configFields): void
    {
        $this->configFields = $configFields;
    }
}
