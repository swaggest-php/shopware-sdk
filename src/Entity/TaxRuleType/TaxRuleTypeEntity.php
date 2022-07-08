<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\TaxRuleType;

use Swaggest\ShopwareSdk\Entity\Entity;
use Swaggest\ShopwareSdk\Entity\EntityIdTrait;
use Swaggest\ShopwareSdk\Entity\TaxRule\TaxRuleCollection;
use Swaggest\ShopwareSdk\Entity\TaxRuleTypeTranslation\TaxRuleTypeTranslationCollection;

final class TaxRuleTypeEntity extends Entity
{
    use EntityIdTrait;

    protected string $technicalName;

    protected int $position;

    protected string $typeName;

    protected ?TaxRuleCollection $rules;

    protected TaxRuleTypeTranslationCollection $translations;

    public function getTechnicalName(): string
    {
        return $this->technicalName;
    }

    public function setTechnicalName(string $technicalName): void
    {
        $this->technicalName = $technicalName;
    }

    public function getPosition(): int
    {
        return $this->position;
    }

    public function setPosition(int $position): void
    {
        $this->position = $position;
    }

    public function getTypeName(): string
    {
        return $this->typeName;
    }

    public function setTypeName(string $typeName): void
    {
        $this->typeName = $typeName;
    }

    public function getRules(): ?TaxRuleCollection
    {
        return $this->rules;
    }

    public function setRules(?TaxRuleCollection $rules): void
    {
        $this->rules = $rules;
    }

    public function getTranslations(): TaxRuleTypeTranslationCollection
    {
        return $this->translations;
    }

    public function setTranslations(TaxRuleTypeTranslationCollection $translations): void
    {
        $this->translations = $translations;
    }
}
