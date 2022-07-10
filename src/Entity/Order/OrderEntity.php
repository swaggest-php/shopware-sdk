<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\Order;

use Swaggest\ShopwareSdk\Entity\Currency\CurrencyEntity;
use Swaggest\ShopwareSdk\Entity\Document\DocumentCollection;
use Swaggest\ShopwareSdk\Entity\Entity;
use Swaggest\ShopwareSdk\Entity\EntityIdTrait;
use Swaggest\ShopwareSdk\Entity\Language\LanguageEntity;
use Swaggest\ShopwareSdk\Entity\OrderAddress\OrderAddressCollection;
use Swaggest\ShopwareSdk\Entity\OrderAddress\OrderAddressEntity;
use Swaggest\ShopwareSdk\Entity\OrderCustomer\OrderCustomerEntity;
use Swaggest\ShopwareSdk\Entity\OrderDelivery\OrderDeliveryCollection;
use Swaggest\ShopwareSdk\Entity\OrderLineItem\OrderLineItemCollection;
use Swaggest\ShopwareSdk\Entity\OrderTransaction\OrderTransactionCollection;
use Swaggest\ShopwareSdk\Entity\SalesChannel\SalesChannelEntity;
use Swaggest\ShopwareSdk\Entity\StateMachineState\StateMachineStateEntity;
use Swaggest\ShopwareSdk\Entity\Tag\TagCollection;
use Swaggest\ShopwareSdk\Entity\User\UserEntity;

final class OrderEntity extends Entity
{
    use EntityIdTrait;

    protected ?int $autoIncrement;

    protected ?string $orderNumber;

    protected string $billingAddressId;

    protected ?string $billingAddressVersionId;

    protected string $currencyId;

    protected string $languageId;

    protected string $salesChannelId;

    protected \DateTimeInterface $orderDateTime;

    protected ?\DateTimeInterface $orderDate;

    protected ?array $price;

    protected ?float $amountTotal;

    protected ?float $amountNet;

    protected ?float $positionPrice;

    protected ?string $taxStatus;

    protected ?array $shippingCosts;

    protected ?float $shippingTotal;

    protected float $currencyFactor;

    protected ?string $deepLinkCode;

    protected ?string $affiliateCode;

    protected ?string $campaignCode;

    protected ?string $customerComment;

    protected string $stateId;

    protected ?StateMachineStateEntity $stateMachineState;

    protected ?array $ruleIds;

    protected ?array $customFields;

    protected ?string $createdById;

    protected ?string $updatedById;

    protected ?OrderCustomerEntity $orderCustomer;

    protected ?CurrencyEntity $currency;

    protected ?LanguageEntity $language;

    protected ?SalesChannelEntity $salesChannel;

    protected ?OrderAddressCollection $addresses;

    protected ?OrderAddressEntity $billingAddress;

    protected ?OrderDeliveryCollection $deliveries;

    protected ?OrderLineItemCollection $lineItems;

    protected ?OrderTransactionCollection $transactions;

    protected ?DocumentCollection $documents;

    protected ?TagCollection $tags;

    protected ?UserEntity $createdBy;

    protected ?UserEntity $updatedBy;

    protected ?array $itemRounding;

    protected ?array $totalRounding;

    public function getAutoIncrement(): ?int
    {
        return $this->autoIncrement;
    }

    public function setAutoIncrement(?int $autoIncrement): void
    {
        $this->autoIncrement = $autoIncrement;
    }

    public function getOrderNumber(): ?string
    {
        return $this->orderNumber;
    }

    public function setOrderNumber(?string $orderNumber): void
    {
        $this->orderNumber = $orderNumber;
    }

    public function getBillingAddressId(): string
    {
        return $this->billingAddressId;
    }

    public function setBillingAddressId(string $billingAddressId): void
    {
        $this->billingAddressId = $billingAddressId;
    }

    public function getBillingAddressVersionId(): ?string
    {
        return $this->billingAddressVersionId;
    }

    public function setBillingAddressVersionId(?string $billingAddressVersionId): void
    {
        $this->billingAddressVersionId = $billingAddressVersionId;
    }

    public function getCurrencyId(): string
    {
        return $this->currencyId;
    }

    public function setCurrencyId(string $currencyId): void
    {
        $this->currencyId = $currencyId;
    }

    public function getLanguageId(): string
    {
        return $this->languageId;
    }

    public function setLanguageId(string $languageId): void
    {
        $this->languageId = $languageId;
    }

    public function getSalesChannelId(): string
    {
        return $this->salesChannelId;
    }

    public function setSalesChannelId(string $salesChannelId): void
    {
        $this->salesChannelId = $salesChannelId;
    }

    public function getOrderDateTime(): \DateTimeInterface
    {
        return $this->orderDateTime;
    }

    public function setOrderDateTime(\DateTimeInterface $orderDateTime): void
    {
        $this->orderDateTime = $orderDateTime;
    }

    public function getOrderDate(): ?\DateTimeInterface
    {
        return $this->orderDate;
    }

    public function setOrderDate(?\DateTimeInterface $orderDate): void
    {
        $this->orderDate = $orderDate;
    }

    public function getPrice(): ?array
    {
        return $this->price;
    }

    public function setPrice(?array $price): void
    {
        $this->price = $price;
    }

    public function getAmountTotal(): ?float
    {
        return $this->amountTotal;
    }

    public function setAmountTotal(?float $amountTotal): void
    {
        $this->amountTotal = $amountTotal;
    }

    public function getAmountNet(): ?float
    {
        return $this->amountNet;
    }

    public function setAmountNet(?float $amountNet): void
    {
        $this->amountNet = $amountNet;
    }

    public function getPositionPrice(): ?float
    {
        return $this->positionPrice;
    }

    public function setPositionPrice(?float $positionPrice): void
    {
        $this->positionPrice = $positionPrice;
    }

    public function getTaxStatus(): ?string
    {
        return $this->taxStatus;
    }

    public function setTaxStatus(?string $taxStatus): void
    {
        $this->taxStatus = $taxStatus;
    }

    public function getShippingCosts(): ?array
    {
        return $this->shippingCosts;
    }

    public function setShippingCosts(?array $shippingCosts): void
    {
        $this->shippingCosts = $shippingCosts;
    }

    public function getShippingTotal(): ?float
    {
        return $this->shippingTotal;
    }

    public function setShippingTotal(?float $shippingTotal): void
    {
        $this->shippingTotal = $shippingTotal;
    }

    public function getCurrencyFactor(): float
    {
        return $this->currencyFactor;
    }

    public function setCurrencyFactor(float $currencyFactor): void
    {
        $this->currencyFactor = $currencyFactor;
    }

    public function getDeepLinkCode(): ?string
    {
        return $this->deepLinkCode;
    }

    public function setDeepLinkCode(?string $deepLinkCode): void
    {
        $this->deepLinkCode = $deepLinkCode;
    }

    public function getAffiliateCode(): ?string
    {
        return $this->affiliateCode;
    }

    public function setAffiliateCode(?string $affiliateCode): void
    {
        $this->affiliateCode = $affiliateCode;
    }

    public function getCampaignCode(): ?string
    {
        return $this->campaignCode;
    }

    public function setCampaignCode(?string $campaignCode): void
    {
        $this->campaignCode = $campaignCode;
    }

    public function getCustomerComment(): ?string
    {
        return $this->customerComment;
    }

    public function setCustomerComment(?string $customerComment): void
    {
        $this->customerComment = $customerComment;
    }

    public function getStateId(): string
    {
        return $this->stateId;
    }

    public function setStateId(string $stateId): void
    {
        $this->stateId = $stateId;
    }

    public function getStateMachineState(): ?StateMachineStateEntity
    {
        return $this->stateMachineState;
    }

    public function setStateMachineState(?StateMachineStateEntity $stateMachineState): void
    {
        $this->stateMachineState = $stateMachineState;
    }

    public function getRuleIds(): ?array
    {
        return $this->ruleIds;
    }

    public function setRuleIds(?array $ruleIds): void
    {
        $this->ruleIds = $ruleIds;
    }

    public function getCustomFields(): ?array
    {
        return $this->customFields;
    }

    public function setCustomFields(?array $customFields): void
    {
        $this->customFields = $customFields;
    }

    public function getCreatedById(): ?string
    {
        return $this->createdById;
    }

    public function setCreatedById(?string $createdById): void
    {
        $this->createdById = $createdById;
    }

    public function getUpdatedById(): ?string
    {
        return $this->updatedById;
    }

    public function setUpdatedById(?string $updatedById): void
    {
        $this->updatedById = $updatedById;
    }

    public function getOrderCustomer(): ?OrderCustomerEntity
    {
        return $this->orderCustomer;
    }

    public function setOrderCustomer(?OrderCustomerEntity $orderCustomer): void
    {
        $this->orderCustomer = $orderCustomer;
    }

    public function getCurrency(): ?CurrencyEntity
    {
        return $this->currency;
    }

    public function setCurrency(?CurrencyEntity $currency): void
    {
        $this->currency = $currency;
    }

    public function getLanguage(): ?LanguageEntity
    {
        return $this->language;
    }

    public function setLanguage(?LanguageEntity $language): void
    {
        $this->language = $language;
    }

    public function getSalesChannel(): ?SalesChannelEntity
    {
        return $this->salesChannel;
    }

    public function setSalesChannel(?SalesChannelEntity $salesChannel): void
    {
        $this->salesChannel = $salesChannel;
    }

    public function getAddresses(): ?OrderAddressCollection
    {
        return $this->addresses;
    }

    public function setAddresses(?OrderAddressCollection $addresses): void
    {
        $this->addresses = $addresses;
    }

    public function getBillingAddress(): ?OrderAddressEntity
    {
        return $this->billingAddress;
    }

    public function setBillingAddress(?OrderAddressEntity $billingAddress): void
    {
        $this->billingAddress = $billingAddress;
    }

    public function getDeliveries(): ?OrderDeliveryCollection
    {
        return $this->deliveries;
    }

    public function setDeliveries(?OrderDeliveryCollection $deliveries): void
    {
        $this->deliveries = $deliveries;
    }

    public function getLineItems(): ?OrderLineItemCollection
    {
        return $this->lineItems;
    }

    public function setLineItems(?OrderLineItemCollection $lineItems): void
    {
        $this->lineItems = $lineItems;
    }

    public function getTransactions(): ?OrderTransactionCollection
    {
        return $this->transactions;
    }

    public function setTransactions(?OrderTransactionCollection $transactions): void
    {
        $this->transactions = $transactions;
    }

    public function getDocuments(): ?DocumentCollection
    {
        return $this->documents;
    }

    public function setDocuments(?DocumentCollection $documents): void
    {
        $this->documents = $documents;
    }

    public function getTags(): ?TagCollection
    {
        return $this->tags;
    }

    public function setTags(?TagCollection $tags): void
    {
        $this->tags = $tags;
    }

    public function getCreatedBy(): ?UserEntity
    {
        return $this->createdBy;
    }

    public function setCreatedBy(?UserEntity $createdBy): void
    {
        $this->createdBy = $createdBy;
    }

    public function getUpdatedBy(): ?UserEntity
    {
        return $this->updatedBy;
    }

    public function setUpdatedBy(?UserEntity $updatedBy): void
    {
        $this->updatedBy = $updatedBy;
    }

    public function getItemRounding(): ?array
    {
        return $this->itemRounding;
    }

    public function setItemRounding(?array $itemRounding): void
    {
        $this->itemRounding = $itemRounding;
    }

    public function getTotalRounding(): ?array
    {
        return $this->totalRounding;
    }

    public function setTotalRounding(?array $totalRounding): void
    {
        $this->totalRounding = $totalRounding;
    }
}
