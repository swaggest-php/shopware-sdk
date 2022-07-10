<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\ShippingMethodPrice;

use Swaggest\ShopwareSdk\Entity\Entity;
use Swaggest\ShopwareSdk\Entity\EntityIdTrait;
use Swaggest\ShopwareSdk\Entity\Rule\RuleEntity;
use Swaggest\ShopwareSdk\Entity\ShippingMethod\ShippingMethodEntity;

final class ShippingMethodPriceEntity extends Entity
{
    use EntityIdTrait;

    protected string $shippingMethodId;

    protected ?string $ruleId;

    protected ?int $calculation;

    protected ?string $calculationRuleId;

    protected ?float $quantityStart;

    protected ?float $quantityEnd;

    protected ?array $currencyPrice;

    protected ?array $customFields;

    protected ?ShippingMethodEntity $shippingMethod;

    protected ?RuleEntity $rule;

    protected ?RuleEntity $calculationRule;

    public function getShippingMethodId(): string
    {
        return $this->shippingMethodId;
    }

    public function setShippingMethodId(string $shippingMethodId): void
    {
        $this->shippingMethodId = $shippingMethodId;
    }

    public function getRuleId(): ?string
    {
        return $this->ruleId;
    }

    public function setRuleId(?string $ruleId): void
    {
        $this->ruleId = $ruleId;
    }

    public function getCalculation(): ?int
    {
        return $this->calculation;
    }

    public function setCalculation(?int $calculation): void
    {
        $this->calculation = $calculation;
    }

    public function getCalculationRuleId(): ?string
    {
        return $this->calculationRuleId;
    }

    public function setCalculationRuleId(?string $calculationRuleId): void
    {
        $this->calculationRuleId = $calculationRuleId;
    }

    public function getQuantityStart(): ?float
    {
        return $this->quantityStart;
    }

    public function setQuantityStart(?float $quantityStart): void
    {
        $this->quantityStart = $quantityStart;
    }

    public function getQuantityEnd(): ?float
    {
        return $this->quantityEnd;
    }

    public function setQuantityEnd(?float $quantityEnd): void
    {
        $this->quantityEnd = $quantityEnd;
    }

    public function getCurrencyPrice(): ?array
    {
        return $this->currencyPrice;
    }

    public function setCurrencyPrice(?array $currencyPrice): void
    {
        $this->currencyPrice = $currencyPrice;
    }

    public function getCustomFields(): ?array
    {
        return $this->customFields;
    }

    public function setCustomFields(?array $customFields): void
    {
        $this->customFields = $customFields;
    }

    public function getShippingMethod(): ?ShippingMethodEntity
    {
        return $this->shippingMethod;
    }

    public function setShippingMethod(?ShippingMethodEntity $shippingMethod): void
    {
        $this->shippingMethod = $shippingMethod;
    }

    public function getRule(): ?RuleEntity
    {
        return $this->rule;
    }

    public function setRule(?RuleEntity $rule): void
    {
        $this->rule = $rule;
    }

    public function getCalculationRule(): ?RuleEntity
    {
        return $this->calculationRule;
    }

    public function setCalculationRule(?RuleEntity $calculationRule): void
    {
        $this->calculationRule = $calculationRule;
    }
}
