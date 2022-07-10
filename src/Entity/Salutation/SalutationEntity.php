<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\Salutation;

use Swaggest\ShopwareSdk\Entity\Customer\CustomerCollection;
use Swaggest\ShopwareSdk\Entity\CustomerAddress\CustomerAddressCollection;
use Swaggest\ShopwareSdk\Entity\Entity;
use Swaggest\ShopwareSdk\Entity\EntityIdTrait;
use Swaggest\ShopwareSdk\Entity\NewsletterRecipient\NewsletterRecipientCollection;
use Swaggest\ShopwareSdk\Entity\OrderAddress\OrderAddressCollection;
use Swaggest\ShopwareSdk\Entity\OrderCustomer\OrderCustomerCollection;
use Swaggest\ShopwareSdk\Entity\SalutationTranslation\SalutationTranslationCollection;

final class SalutationEntity extends Entity
{
    use EntityIdTrait;

    protected string $salutationKey;

    protected string $displayName;

    protected string $letterName;

    protected ?array $customFields;

    protected SalutationTranslationCollection $translations;

    protected ?CustomerCollection $customers;

    protected ?CustomerAddressCollection $customerAddresses;

    protected ?OrderCustomerCollection $orderCustomers;

    protected ?OrderAddressCollection $orderAddresses;

    protected ?NewsletterRecipientCollection $newsletterRecipients;

    public function getSalutationKey(): string
    {
        return $this->salutationKey;
    }

    public function setSalutationKey(string $salutationKey): void
    {
        $this->salutationKey = $salutationKey;
    }

    public function getDisplayName(): string
    {
        return $this->displayName;
    }

    public function setDisplayName(string $displayName): void
    {
        $this->displayName = $displayName;
    }

    public function getLetterName(): string
    {
        return $this->letterName;
    }

    public function setLetterName(string $letterName): void
    {
        $this->letterName = $letterName;
    }

    public function getCustomFields(): ?array
    {
        return $this->customFields;
    }

    public function setCustomFields(?array $customFields): void
    {
        $this->customFields = $customFields;
    }

    public function getTranslations(): SalutationTranslationCollection
    {
        return $this->translations;
    }

    public function setTranslations(SalutationTranslationCollection $translations): void
    {
        $this->translations = $translations;
    }

    public function getCustomers(): ?CustomerCollection
    {
        return $this->customers;
    }

    public function setCustomers(?CustomerCollection $customers): void
    {
        $this->customers = $customers;
    }

    public function getCustomerAddresses(): ?CustomerAddressCollection
    {
        return $this->customerAddresses;
    }

    public function setCustomerAddresses(?CustomerAddressCollection $customerAddresses): void
    {
        $this->customerAddresses = $customerAddresses;
    }

    public function getOrderCustomers(): ?OrderCustomerCollection
    {
        return $this->orderCustomers;
    }

    public function setOrderCustomers(?OrderCustomerCollection $orderCustomers): void
    {
        $this->orderCustomers = $orderCustomers;
    }

    public function getOrderAddresses(): ?OrderAddressCollection
    {
        return $this->orderAddresses;
    }

    public function setOrderAddresses(?OrderAddressCollection $orderAddresses): void
    {
        $this->orderAddresses = $orderAddresses;
    }

    public function getNewsletterRecipients(): ?NewsletterRecipientCollection
    {
        return $this->newsletterRecipients;
    }

    public function setNewsletterRecipients(?NewsletterRecipientCollection $newsletterRecipients): void
    {
        $this->newsletterRecipients = $newsletterRecipients;
    }
}
