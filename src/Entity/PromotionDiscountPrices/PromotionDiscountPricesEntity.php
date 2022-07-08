<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\PromotionDiscountPrices;

use Swaggest\ShopwareSdk\Entity\Currency\CurrencyEntity;
use Swaggest\ShopwareSdk\Entity\Entity;
use Swaggest\ShopwareSdk\Entity\EntityIdTrait;
use Swaggest\ShopwareSdk\Entity\PromotionDiscount\PromotionDiscountEntity;

final class PromotionDiscountPricesEntity extends Entity
{
    use EntityIdTrait;

    protected string $discountId;

    protected string $currencyId;

    protected float $price;

    protected ?PromotionDiscountEntity $promotionDiscount;

    protected ?CurrencyEntity $currency;

    public function getDiscountId(): string
    {
        return $this->discountId;
    }

    public function setDiscountId(string $discountId): void
    {
        $this->discountId = $discountId;
    }

    public function getCurrencyId(): string
    {
        return $this->currencyId;
    }

    public function setCurrencyId(string $currencyId): void
    {
        $this->currencyId = $currencyId;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function setPrice(float $price): void
    {
        $this->price = $price;
    }

    public function getPromotionDiscount(): ?PromotionDiscountEntity
    {
        return $this->promotionDiscount;
    }

    public function setPromotionDiscount(?PromotionDiscountEntity $promotionDiscount): void
    {
        $this->promotionDiscount = $promotionDiscount;
    }

    public function getCurrency(): ?CurrencyEntity
    {
        return $this->currency;
    }

    public function setCurrency(?CurrencyEntity $currency): void
    {
        $this->currency = $currency;
    }
}
