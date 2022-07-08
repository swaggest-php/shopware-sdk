<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\CustomerRecovery;

use Swaggest\ShopwareSdk\Entity\Customer\CustomerEntity;
use Swaggest\ShopwareSdk\Entity\Entity;
use Swaggest\ShopwareSdk\Entity\EntityIdTrait;

final class CustomerRecoveryEntity extends Entity
{
    use EntityIdTrait;

    protected string $hash;

    protected string $customerId;

    protected ?CustomerEntity $customer;

    public function getHash(): string
    {
        return $this->hash;
    }

    public function setHash(string $hash): void
    {
        $this->hash = $hash;
    }

    public function getCustomerId(): string
    {
        return $this->customerId;
    }

    public function setCustomerId(string $customerId): void
    {
        $this->customerId = $customerId;
    }

    public function getCustomer(): ?CustomerEntity
    {
        return $this->customer;
    }

    public function setCustomer(?CustomerEntity $customer): void
    {
        $this->customer = $customer;
    }
}
