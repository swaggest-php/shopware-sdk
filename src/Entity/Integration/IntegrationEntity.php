<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\Integration;

use Swaggest\ShopwareSdk\Entity\AclRole\AclRoleCollection;
use Swaggest\ShopwareSdk\Entity\App\AppEntity;
use Swaggest\ShopwareSdk\Entity\Entity;
use Swaggest\ShopwareSdk\Entity\Notification\NotificationCollection;

final class IntegrationEntity extends Entity
{
    protected string $label;

    protected string $accessKey;

    protected string $secretAccessKey;

    protected ?bool $writeAccess;

    protected ?\DateTimeInterface $lastUsageAt;

    protected ?bool $admin;

    protected ?array $customFields;

    protected ?\DateTimeInterface $deletedAt;

    protected ?AppEntity $app;

    protected ?AclRoleCollection $aclRoles;

    protected ?NotificationCollection $createdNotifications;

    public function getLabel(): string
    {
        return $this->label;
    }

    public function setLabel(string $label): void
    {
        $this->label = $label;
    }

    public function getAccessKey(): string
    {
        return $this->accessKey;
    }

    public function setAccessKey(string $accessKey): void
    {
        $this->accessKey = $accessKey;
    }

    public function getSecretAccessKey(): string
    {
        return $this->secretAccessKey;
    }

    public function setSecretAccessKey(string $secretAccessKey): void
    {
        $this->secretAccessKey = $secretAccessKey;
    }

    public function getWriteAccess(): ?bool
    {
        return $this->writeAccess;
    }

    public function setWriteAccess(?bool $writeAccess): void
    {
        $this->writeAccess = $writeAccess;
    }

    public function getLastUsageAt(): ?\DateTimeInterface
    {
        return $this->lastUsageAt;
    }

    public function setLastUsageAt(?\DateTimeInterface $lastUsageAt): void
    {
        $this->lastUsageAt = $lastUsageAt;
    }

    public function getAdmin(): ?bool
    {
        return $this->admin;
    }

    public function setAdmin(?bool $admin): void
    {
        $this->admin = $admin;
    }

    public function getCustomFields(): ?array
    {
        return $this->customFields;
    }

    public function setCustomFields(?array $customFields): void
    {
        $this->customFields = $customFields;
    }

    public function getDeletedAt(): ?\DateTimeInterface
    {
        return $this->deletedAt;
    }

    public function setDeletedAt(?\DateTimeInterface $deletedAt): void
    {
        $this->deletedAt = $deletedAt;
    }

    public function getApp(): ?AppEntity
    {
        return $this->app;
    }

    public function setApp(?AppEntity $app): void
    {
        $this->app = $app;
    }

    public function getAclRoles(): ?AclRoleCollection
    {
        return $this->aclRoles;
    }

    public function setAclRoles(?AclRoleCollection $aclRoles): void
    {
        $this->aclRoles = $aclRoles;
    }

    public function getCreatedNotifications(): ?NotificationCollection
    {
        return $this->createdNotifications;
    }

    public function setCreatedNotifications(?NotificationCollection $createdNotifications): void
    {
        $this->createdNotifications = $createdNotifications;
    }
}
