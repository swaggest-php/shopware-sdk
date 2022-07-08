<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\PaymentMethod;

use Swaggest\ShopwareSdk\Entity\AppPaymentMethod\AppPaymentMethodEntity;
use Swaggest\ShopwareSdk\Entity\Customer\CustomerCollection;
use Swaggest\ShopwareSdk\Entity\Entity;
use Swaggest\ShopwareSdk\Entity\EntityIdTrait;
use Swaggest\ShopwareSdk\Entity\Media\MediaEntity;
use Swaggest\ShopwareSdk\Entity\OrderTransaction\OrderTransactionCollection;
use Swaggest\ShopwareSdk\Entity\PaymentMethodTranslation\PaymentMethodTranslationCollection;
use Swaggest\ShopwareSdk\Entity\Plugin\PluginEntity;
use Swaggest\ShopwareSdk\Entity\Rule\RuleEntity;
use Swaggest\ShopwareSdk\Entity\SalesChannel\SalesChannelCollection;

final class PaymentMethodEntity extends Entity
{
    use EntityIdTrait;

    protected ?string $pluginId;

    protected ?string $handlerIdentifier;

    protected string $name;

    protected ?string $distinguishableName;

    protected ?string $description;

    protected ?int $position;

    protected bool $active;

    protected bool $afterOrderEnabled;

    protected array $customFields;

    protected ?string $availabilityRuleId;

    protected ?string $mediaId;

    protected ?string $formattedHandlerIdentifier;

    protected bool $synchronous;

    protected bool $asynchronous;

    protected bool $prepared;

    protected PaymentMethodTranslationCollection $translations;

    protected ?MediaEntity $media;

    protected ?RuleEntity $availabilityRule;

    protected ?SalesChannelCollection $salesChannelDefaultAssignments;

    protected ?PluginEntity $plugin;

    protected ?CustomerCollection $customers;

    protected ?OrderTransactionCollection $orderTransactions;

    protected ?SalesChannelCollection $salesChannels;

    protected ?AppPaymentMethodEntity $appPaymentMethod;

    public function getPluginId(): ?string
    {
        return $this->pluginId;
    }

    public function setPluginId(?string $pluginId): void
    {
        $this->pluginId = $pluginId;
    }

    public function getHandlerIdentifier(): ?string
    {
        return $this->handlerIdentifier;
    }

    public function setHandlerIdentifier(?string $handlerIdentifier): void
    {
        $this->handlerIdentifier = $handlerIdentifier;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getDistinguishableName(): ?string
    {
        return $this->distinguishableName;
    }

    public function setDistinguishableName(?string $distinguishableName): void
    {
        $this->distinguishableName = $distinguishableName;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }

    public function getPosition(): ?int
    {
        return $this->position;
    }

    public function setPosition(?int $position): void
    {
        $this->position = $position;
    }

    public function getActive(): bool
    {
        return $this->active;
    }

    public function setActive(bool $active): void
    {
        $this->active = $active;
    }

    public function getAfterOrderEnabled(): bool
    {
        return $this->afterOrderEnabled;
    }

    public function setAfterOrderEnabled(bool $afterOrderEnabled): void
    {
        $this->afterOrderEnabled = $afterOrderEnabled;
    }

    public function getCustomFields(): array
    {
        return $this->customFields;
    }

    public function setCustomFields(array $customFields): void
    {
        $this->customFields = $customFields;
    }

    public function getAvailabilityRuleId(): ?string
    {
        return $this->availabilityRuleId;
    }

    public function setAvailabilityRuleId(?string $availabilityRuleId): void
    {
        $this->availabilityRuleId = $availabilityRuleId;
    }

    public function getMediaId(): ?string
    {
        return $this->mediaId;
    }

    public function setMediaId(?string $mediaId): void
    {
        $this->mediaId = $mediaId;
    }

    public function getFormattedHandlerIdentifier(): ?string
    {
        return $this->formattedHandlerIdentifier;
    }

    public function setFormattedHandlerIdentifier(?string $formattedHandlerIdentifier): void
    {
        $this->formattedHandlerIdentifier = $formattedHandlerIdentifier;
    }

    public function getSynchronous(): bool
    {
        return $this->synchronous;
    }

    public function setSynchronous(bool $synchronous): void
    {
        $this->synchronous = $synchronous;
    }

    public function getAsynchronous(): bool
    {
        return $this->asynchronous;
    }

    public function setAsynchronous(bool $asynchronous): void
    {
        $this->asynchronous = $asynchronous;
    }

    public function getPrepared(): bool
    {
        return $this->prepared;
    }

    public function setPrepared(bool $prepared): void
    {
        $this->prepared = $prepared;
    }

    public function getTranslations(): PaymentMethodTranslationCollection
    {
        return $this->translations;
    }

    public function setTranslations(PaymentMethodTranslationCollection $translations): void
    {
        $this->translations = $translations;
    }

    public function getMedia(): ?MediaEntity
    {
        return $this->media;
    }

    public function setMedia(?MediaEntity $media): void
    {
        $this->media = $media;
    }

    public function getAvailabilityRule(): ?RuleEntity
    {
        return $this->availabilityRule;
    }

    public function setAvailabilityRule(?RuleEntity $availabilityRule): void
    {
        $this->availabilityRule = $availabilityRule;
    }

    public function getSalesChannelDefaultAssignments(): ?SalesChannelCollection
    {
        return $this->salesChannelDefaultAssignments;
    }

    public function setSalesChannelDefaultAssignments(?SalesChannelCollection $salesChannelDefaultAssignments): void
    {
        $this->salesChannelDefaultAssignments = $salesChannelDefaultAssignments;
    }

    public function getPlugin(): ?PluginEntity
    {
        return $this->plugin;
    }

    public function setPlugin(?PluginEntity $plugin): void
    {
        $this->plugin = $plugin;
    }

    public function getCustomers(): ?CustomerCollection
    {
        return $this->customers;
    }

    public function setCustomers(?CustomerCollection $customers): void
    {
        $this->customers = $customers;
    }

    public function getOrderTransactions(): ?OrderTransactionCollection
    {
        return $this->orderTransactions;
    }

    public function setOrderTransactions(?OrderTransactionCollection $orderTransactions): void
    {
        $this->orderTransactions = $orderTransactions;
    }

    public function getSalesChannels(): ?SalesChannelCollection
    {
        return $this->salesChannels;
    }

    public function setSalesChannels(?SalesChannelCollection $salesChannels): void
    {
        $this->salesChannels = $salesChannels;
    }

    public function getAppPaymentMethod(): ?AppPaymentMethodEntity
    {
        return $this->appPaymentMethod;
    }

    public function setAppPaymentMethod(?AppPaymentMethodEntity $appPaymentMethod): void
    {
        $this->appPaymentMethod = $appPaymentMethod;
    }
}
