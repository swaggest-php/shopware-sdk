<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\Promotion;

use Swaggest\ShopwareSdk\Entity\Customer\CustomerCollection;
use Swaggest\ShopwareSdk\Entity\Entity;
use Swaggest\ShopwareSdk\Entity\EntityIdTrait;
use Swaggest\ShopwareSdk\Entity\PromotionDiscount\PromotionDiscountCollection;
use Swaggest\ShopwareSdk\Entity\PromotionIndividualCode\PromotionIndividualCodeCollection;
use Swaggest\ShopwareSdk\Entity\PromotionSalesChannel\PromotionSalesChannelCollection;
use Swaggest\ShopwareSdk\Entity\PromotionSetgroup\PromotionSetgroupCollection;
use Swaggest\ShopwareSdk\Entity\PromotionTranslation\PromotionTranslationCollection;
use Swaggest\ShopwareSdk\Entity\Rule\RuleCollection;

final class PromotionEntity extends Entity
{
    use EntityIdTrait;

    protected string $name;

    protected bool $active;

    protected ?\DateTimeInterface $validFrom;

    protected ?\DateTimeInterface $validUntil;

    protected ?int $maxRedemptionsGlobal;

    protected ?int $maxRedemptionsPerCustomer;

    protected int $priority;

    protected bool $exclusive;

    protected ?string $code;

    protected bool $useCodes;

    protected bool $useIndividualCodes;

    protected ?string $individualCodePattern;

    protected bool $useSetGroups;

    protected ?bool $customerRestriction;

    protected bool $preventCombination;

    protected ?int $orderCount;

    protected ?array $ordersPerCustomerCount;

    protected ?PromotionSetgroupCollection $setgroups;

    protected ?PromotionSalesChannelCollection $salesChannels;

    protected ?PromotionDiscountCollection $discounts;

    protected ?PromotionIndividualCodeCollection $individualCodes;

    protected ?RuleCollection $personaRules;

    protected ?CustomerCollection $personaCustomers;

    protected ?RuleCollection $orderRules;

    protected ?RuleCollection $cartRules;

    protected PromotionTranslationCollection $translations;

    protected ?array $exclusionIds;

    protected ?array $customFields;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getActive(): bool
    {
        return $this->active;
    }

    public function setActive(bool $active): void
    {
        $this->active = $active;
    }

    public function getValidFrom(): ?\DateTimeInterface
    {
        return $this->validFrom;
    }

    public function setValidFrom(?\DateTimeInterface $validFrom): void
    {
        $this->validFrom = $validFrom;
    }

    public function getValidUntil(): ?\DateTimeInterface
    {
        return $this->validUntil;
    }

    public function setValidUntil(?\DateTimeInterface $validUntil): void
    {
        $this->validUntil = $validUntil;
    }

    public function getMaxRedemptionsGlobal(): ?int
    {
        return $this->maxRedemptionsGlobal;
    }

    public function setMaxRedemptionsGlobal(?int $maxRedemptionsGlobal): void
    {
        $this->maxRedemptionsGlobal = $maxRedemptionsGlobal;
    }

    public function getMaxRedemptionsPerCustomer(): ?int
    {
        return $this->maxRedemptionsPerCustomer;
    }

    public function setMaxRedemptionsPerCustomer(?int $maxRedemptionsPerCustomer): void
    {
        $this->maxRedemptionsPerCustomer = $maxRedemptionsPerCustomer;
    }

    public function getPriority(): int
    {
        return $this->priority;
    }

    public function setPriority(int $priority): void
    {
        $this->priority = $priority;
    }

    public function getExclusive(): bool
    {
        return $this->exclusive;
    }

    public function setExclusive(bool $exclusive): void
    {
        $this->exclusive = $exclusive;
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(?string $code): void
    {
        $this->code = $code;
    }

    public function getUseCodes(): bool
    {
        return $this->useCodes;
    }

    public function setUseCodes(bool $useCodes): void
    {
        $this->useCodes = $useCodes;
    }

    public function getUseIndividualCodes(): bool
    {
        return $this->useIndividualCodes;
    }

    public function setUseIndividualCodes(bool $useIndividualCodes): void
    {
        $this->useIndividualCodes = $useIndividualCodes;
    }

    public function getIndividualCodePattern(): ?string
    {
        return $this->individualCodePattern;
    }

    public function setIndividualCodePattern(?string $individualCodePattern): void
    {
        $this->individualCodePattern = $individualCodePattern;
    }

    public function getUseSetGroups(): bool
    {
        return $this->useSetGroups;
    }

    public function setUseSetGroups(bool $useSetGroups): void
    {
        $this->useSetGroups = $useSetGroups;
    }

    public function getCustomerRestriction(): ?bool
    {
        return $this->customerRestriction;
    }

    public function setCustomerRestriction(?bool $customerRestriction): void
    {
        $this->customerRestriction = $customerRestriction;
    }

    public function getPreventCombination(): bool
    {
        return $this->preventCombination;
    }

    public function setPreventCombination(bool $preventCombination): void
    {
        $this->preventCombination = $preventCombination;
    }

    public function getOrderCount(): ?int
    {
        return $this->orderCount;
    }

    public function setOrderCount(?int $orderCount): void
    {
        $this->orderCount = $orderCount;
    }

    public function getOrdersPerCustomerCount(): ?array
    {
        return $this->ordersPerCustomerCount;
    }

    public function setOrdersPerCustomerCount(?array $ordersPerCustomerCount): void
    {
        $this->ordersPerCustomerCount = $ordersPerCustomerCount;
    }

    public function getSetgroups(): ?PromotionSetgroupCollection
    {
        return $this->setgroups;
    }

    public function setSetgroups(?PromotionSetgroupCollection $setgroups): void
    {
        $this->setgroups = $setgroups;
    }

    public function getSalesChannels(): ?PromotionSalesChannelCollection
    {
        return $this->salesChannels;
    }

    public function setSalesChannels(?PromotionSalesChannelCollection $salesChannels): void
    {
        $this->salesChannels = $salesChannels;
    }

    public function getDiscounts(): ?PromotionDiscountCollection
    {
        return $this->discounts;
    }

    public function setDiscounts(?PromotionDiscountCollection $discounts): void
    {
        $this->discounts = $discounts;
    }

    public function getIndividualCodes(): ?PromotionIndividualCodeCollection
    {
        return $this->individualCodes;
    }

    public function setIndividualCodes(?PromotionIndividualCodeCollection $individualCodes): void
    {
        $this->individualCodes = $individualCodes;
    }

    public function getPersonaRules(): ?RuleCollection
    {
        return $this->personaRules;
    }

    public function setPersonaRules(?RuleCollection $personaRules): void
    {
        $this->personaRules = $personaRules;
    }

    public function getPersonaCustomers(): ?CustomerCollection
    {
        return $this->personaCustomers;
    }

    public function setPersonaCustomers(?CustomerCollection $personaCustomers): void
    {
        $this->personaCustomers = $personaCustomers;
    }

    public function getOrderRules(): ?RuleCollection
    {
        return $this->orderRules;
    }

    public function setOrderRules(?RuleCollection $orderRules): void
    {
        $this->orderRules = $orderRules;
    }

    public function getCartRules(): ?RuleCollection
    {
        return $this->cartRules;
    }

    public function setCartRules(?RuleCollection $cartRules): void
    {
        $this->cartRules = $cartRules;
    }

    public function getTranslations(): PromotionTranslationCollection
    {
        return $this->translations;
    }

    public function setTranslations(PromotionTranslationCollection $translations): void
    {
        $this->translations = $translations;
    }

    public function getExclusionIds(): ?array
    {
        return $this->exclusionIds;
    }

    public function setExclusionIds(?array $exclusionIds): void
    {
        $this->exclusionIds = $exclusionIds;
    }

    public function getCustomFields(): ?array
    {
        return $this->customFields;
    }

    public function setCustomFields(?array $customFields): void
    {
        $this->customFields = $customFields;
    }
}
