<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\TaxRuleTypeTranslation;

use Swaggest\ShopwareSdk\Entity\Entity;
use Swaggest\ShopwareSdk\Entity\Language\LanguageEntity;
use Swaggest\ShopwareSdk\Entity\TaxRuleType\TaxRuleTypeEntity;

final class TaxRuleTypeTranslationEntity extends Entity
{
    protected string $typeName;

    protected string $taxRuleTypeId;

    protected string $languageId;

    protected ?TaxRuleTypeEntity $taxRuleType;

    protected ?LanguageEntity $language;

    public function getTypeName(): string
    {
        return $this->typeName;
    }

    public function setTypeName(string $typeName): void
    {
        $this->typeName = $typeName;
    }

    public function getTaxRuleTypeId(): string
    {
        return $this->taxRuleTypeId;
    }

    public function setTaxRuleTypeId(string $taxRuleTypeId): void
    {
        $this->taxRuleTypeId = $taxRuleTypeId;
    }

    public function getLanguageId(): string
    {
        return $this->languageId;
    }

    public function setLanguageId(string $languageId): void
    {
        $this->languageId = $languageId;
    }

    public function getTaxRuleType(): ?TaxRuleTypeEntity
    {
        return $this->taxRuleType;
    }

    public function setTaxRuleType(?TaxRuleTypeEntity $taxRuleType): void
    {
        $this->taxRuleType = $taxRuleType;
    }

    public function getLanguage(): ?LanguageEntity
    {
        return $this->language;
    }

    public function setLanguage(?LanguageEntity $language): void
    {
        $this->language = $language;
    }
}
