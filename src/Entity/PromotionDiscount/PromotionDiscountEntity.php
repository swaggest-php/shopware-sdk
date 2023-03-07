<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\PromotionDiscount;

use Swaggest\ShopwareSdk\Entity\Entity;
use Swaggest\ShopwareSdk\Entity\Promotion\PromotionEntity;
use Swaggest\ShopwareSdk\Entity\PromotionDiscountPrices\PromotionDiscountPricesCollection;
use Swaggest\ShopwareSdk\Entity\Rule\RuleCollection;

final class PromotionDiscountEntity extends Entity
{
    protected string $promotionId;

    protected string $scope;

    protected string $type;

    protected float $value;

    protected bool $considerAdvancedRules;

    protected ?float $maxValue;

    protected ?string $sorterKey;

    protected ?string $applierKey;

    protected ?string $usageKey;

    protected ?string $pickerKey;

    protected ?PromotionEntity $promotion;

    protected ?RuleCollection $discountRules;

    protected ?PromotionDiscountPricesCollection $promotionDiscountPrices;

    public function getPromotionId(): string
    {
        return $this->promotionId;
    }

    public function setPromotionId(string $promotionId): void
    {
        $this->promotionId = $promotionId;
    }

    public function getScope(): string
    {
        return $this->scope;
    }

    public function setScope(string $scope): void
    {
        $this->scope = $scope;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): void
    {
        $this->type = $type;
    }

    public function getValue(): float
    {
        return $this->value;
    }

    public function setValue(float $value): void
    {
        $this->value = $value;
    }

    public function getConsiderAdvancedRules(): bool
    {
        return $this->considerAdvancedRules;
    }

    public function setConsiderAdvancedRules(bool $considerAdvancedRules): void
    {
        $this->considerAdvancedRules = $considerAdvancedRules;
    }

    public function getMaxValue(): ?float
    {
        return $this->maxValue;
    }

    public function setMaxValue(?float $maxValue): void
    {
        $this->maxValue = $maxValue;
    }

    public function getSorterKey(): ?string
    {
        return $this->sorterKey;
    }

    public function setSorterKey(?string $sorterKey): void
    {
        $this->sorterKey = $sorterKey;
    }

    public function getApplierKey(): ?string
    {
        return $this->applierKey;
    }

    public function setApplierKey(?string $applierKey): void
    {
        $this->applierKey = $applierKey;
    }

    public function getUsageKey(): ?string
    {
        return $this->usageKey;
    }

    public function setUsageKey(?string $usageKey): void
    {
        $this->usageKey = $usageKey;
    }

    public function getPickerKey(): ?string
    {
        return $this->pickerKey;
    }

    public function setPickerKey(?string $pickerKey): void
    {
        $this->pickerKey = $pickerKey;
    }

    public function getPromotion(): ?PromotionEntity
    {
        return $this->promotion;
    }

    public function setPromotion(?PromotionEntity $promotion): void
    {
        $this->promotion = $promotion;
    }

    public function getDiscountRules(): ?RuleCollection
    {
        return $this->discountRules;
    }

    public function setDiscountRules(?RuleCollection $discountRules): void
    {
        $this->discountRules = $discountRules;
    }

    public function getPromotionDiscountPrices(): ?PromotionDiscountPricesCollection
    {
        return $this->promotionDiscountPrices;
    }

    public function setPromotionDiscountPrices(?PromotionDiscountPricesCollection $promotionDiscountPrices): void
    {
        $this->promotionDiscountPrices = $promotionDiscountPrices;
    }
}
