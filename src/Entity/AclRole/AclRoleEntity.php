<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\AclRole;

use Swaggest\ShopwareSdk\Entity\App\AppEntity;
use Swaggest\ShopwareSdk\Entity\Entity;
use Swaggest\ShopwareSdk\Entity\Integration\IntegrationCollection;
use Swaggest\ShopwareSdk\Entity\User\UserCollection;

final class AclRoleEntity extends Entity
{
    protected string $name;

    protected ?string $description;

    protected array $privileges;

    protected ?\DateTimeInterface $deletedAt;

    protected ?UserCollection $users;

    protected ?AppEntity $app;

    protected ?IntegrationCollection $integrations;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }

    public function getPrivileges(): array
    {
        return $this->privileges;
    }

    public function setPrivileges(array $privileges): void
    {
        $this->privileges = $privileges;
    }

    public function getDeletedAt(): ?\DateTimeInterface
    {
        return $this->deletedAt;
    }

    public function setDeletedAt(?\DateTimeInterface $deletedAt): void
    {
        $this->deletedAt = $deletedAt;
    }

    public function getUsers(): ?UserCollection
    {
        return $this->users;
    }

    public function setUsers(?UserCollection $users): void
    {
        $this->users = $users;
    }

    public function getApp(): ?AppEntity
    {
        return $this->app;
    }

    public function setApp(?AppEntity $app): void
    {
        $this->app = $app;
    }

    public function getIntegrations(): ?IntegrationCollection
    {
        return $this->integrations;
    }

    public function setIntegrations(?IntegrationCollection $integrations): void
    {
        $this->integrations = $integrations;
    }
}
