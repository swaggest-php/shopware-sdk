<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\Rule;

use Swaggest\ShopwareSdk\Entity\Entity;
use Swaggest\ShopwareSdk\Entity\EntityIdTrait;
use Swaggest\ShopwareSdk\Entity\EventAction\EventActionCollection;
use Swaggest\ShopwareSdk\Entity\FlowSequence\FlowSequenceCollection;
use Swaggest\ShopwareSdk\Entity\PaymentMethod\PaymentMethodCollection;
use Swaggest\ShopwareSdk\Entity\ProductPrice\ProductPriceCollection;
use Swaggest\ShopwareSdk\Entity\Promotion\PromotionCollection;
use Swaggest\ShopwareSdk\Entity\PromotionDiscount\PromotionDiscountCollection;
use Swaggest\ShopwareSdk\Entity\PromotionSetgroup\PromotionSetgroupCollection;
use Swaggest\ShopwareSdk\Entity\RuleCondition\RuleConditionCollection;
use Swaggest\ShopwareSdk\Entity\ShippingMethod\ShippingMethodCollection;
use Swaggest\ShopwareSdk\Entity\ShippingMethodPrice\ShippingMethodPriceCollection;

final class RuleEntity extends Entity
{
    use EntityIdTrait;

    protected string $name;

    protected int $priority;

    protected ?string $description;

    protected ?string $payload;

    protected bool $invalid;

    protected array $customFields;

    protected array $moduleTypes;

    protected ?RuleConditionCollection $conditions;

    protected ?ProductPriceCollection $productPrices;

    protected ?ShippingMethodPriceCollection $shippingMethodPrices;

    protected ?ShippingMethodPriceCollection $shippingMethodPriceCalculations;

    protected ?ShippingMethodCollection $shippingMethods;

    protected ?PaymentMethodCollection $paymentMethods;

    protected ?PromotionCollection $personaPromotions;

    protected ?FlowSequenceCollection $flowSequences;

    protected ?PromotionCollection $orderPromotions;

    protected ?PromotionCollection $cartPromotions;

    protected ?PromotionDiscountCollection $promotionDiscounts;

    protected ?PromotionSetgroupCollection $promotionSetGroups;

    protected ?EventActionCollection $eventActions;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getPriority(): int
    {
        return $this->priority;
    }

    public function setPriority(int $priority): void
    {
        $this->priority = $priority;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }

    public function getPayload(): ?string
    {
        return $this->payload;
    }

    public function setPayload(?string $payload): void
    {
        $this->payload = $payload;
    }

    public function getInvalid(): bool
    {
        return $this->invalid;
    }

    public function setInvalid(bool $invalid): void
    {
        $this->invalid = $invalid;
    }

    public function getCustomFields(): array
    {
        return $this->customFields;
    }

    public function setCustomFields(array $customFields): void
    {
        $this->customFields = $customFields;
    }

    public function getModuleTypes(): array
    {
        return $this->moduleTypes;
    }

    public function setModuleTypes(array $moduleTypes): void
    {
        $this->moduleTypes = $moduleTypes;
    }

    public function getConditions(): ?RuleConditionCollection
    {
        return $this->conditions;
    }

    public function setConditions(?RuleConditionCollection $conditions): void
    {
        $this->conditions = $conditions;
    }

    public function getProductPrices(): ?ProductPriceCollection
    {
        return $this->productPrices;
    }

    public function setProductPrices(?ProductPriceCollection $productPrices): void
    {
        $this->productPrices = $productPrices;
    }

    public function getShippingMethodPrices(): ?ShippingMethodPriceCollection
    {
        return $this->shippingMethodPrices;
    }

    public function setShippingMethodPrices(?ShippingMethodPriceCollection $shippingMethodPrices): void
    {
        $this->shippingMethodPrices = $shippingMethodPrices;
    }

    public function getShippingMethodPriceCalculations(): ?ShippingMethodPriceCollection
    {
        return $this->shippingMethodPriceCalculations;
    }

    public function setShippingMethodPriceCalculations(?ShippingMethodPriceCollection $shippingMethodPriceCalculations): void
    {
        $this->shippingMethodPriceCalculations = $shippingMethodPriceCalculations;
    }

    public function getShippingMethods(): ?ShippingMethodCollection
    {
        return $this->shippingMethods;
    }

    public function setShippingMethods(?ShippingMethodCollection $shippingMethods): void
    {
        $this->shippingMethods = $shippingMethods;
    }

    public function getPaymentMethods(): ?PaymentMethodCollection
    {
        return $this->paymentMethods;
    }

    public function setPaymentMethods(?PaymentMethodCollection $paymentMethods): void
    {
        $this->paymentMethods = $paymentMethods;
    }

    public function getPersonaPromotions(): ?PromotionCollection
    {
        return $this->personaPromotions;
    }

    public function setPersonaPromotions(?PromotionCollection $personaPromotions): void
    {
        $this->personaPromotions = $personaPromotions;
    }

    public function getFlowSequences(): ?FlowSequenceCollection
    {
        return $this->flowSequences;
    }

    public function setFlowSequences(?FlowSequenceCollection $flowSequences): void
    {
        $this->flowSequences = $flowSequences;
    }

    public function getOrderPromotions(): ?PromotionCollection
    {
        return $this->orderPromotions;
    }

    public function setOrderPromotions(?PromotionCollection $orderPromotions): void
    {
        $this->orderPromotions = $orderPromotions;
    }

    public function getCartPromotions(): ?PromotionCollection
    {
        return $this->cartPromotions;
    }

    public function setCartPromotions(?PromotionCollection $cartPromotions): void
    {
        $this->cartPromotions = $cartPromotions;
    }

    public function getPromotionDiscounts(): ?PromotionDiscountCollection
    {
        return $this->promotionDiscounts;
    }

    public function setPromotionDiscounts(?PromotionDiscountCollection $promotionDiscounts): void
    {
        $this->promotionDiscounts = $promotionDiscounts;
    }

    public function getPromotionSetGroups(): ?PromotionSetgroupCollection
    {
        return $this->promotionSetGroups;
    }

    public function setPromotionSetGroups(?PromotionSetgroupCollection $promotionSetGroups): void
    {
        $this->promotionSetGroups = $promotionSetGroups;
    }

    public function getEventActions(): ?EventActionCollection
    {
        return $this->eventActions;
    }

    public function setEventActions(?EventActionCollection $eventActions): void
    {
        $this->eventActions = $eventActions;
    }
}
