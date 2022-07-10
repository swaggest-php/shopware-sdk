<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\Notification;

use Swaggest\ShopwareSdk\Entity\Entity;
use Swaggest\ShopwareSdk\Entity\Integration\IntegrationEntity;
use Swaggest\ShopwareSdk\Entity\User\UserEntity;

final class NotificationEntity extends Entity
{
    protected string $status;

    protected string $message;

    protected ?bool $adminOnly;

    protected ?array $requiredPrivileges;

    protected ?string $createdByIntegrationId;

    protected ?string $createdByUserId;

    protected ?IntegrationEntity $createdByIntegration;

    protected ?UserEntity $createdByUser;

    public function getStatus(): string
    {
        return $this->status;
    }

    public function setStatus(string $status): void
    {
        $this->status = $status;
    }

    public function getMessage(): string
    {
        return $this->message;
    }

    public function setMessage(string $message): void
    {
        $this->message = $message;
    }

    public function getAdminOnly(): ?bool
    {
        return $this->adminOnly;
    }

    public function setAdminOnly(?bool $adminOnly): void
    {
        $this->adminOnly = $adminOnly;
    }

    public function getRequiredPrivileges(): ?array
    {
        return $this->requiredPrivileges;
    }

    public function setRequiredPrivileges(?array $requiredPrivileges): void
    {
        $this->requiredPrivileges = $requiredPrivileges;
    }

    public function getCreatedByIntegrationId(): ?string
    {
        return $this->createdByIntegrationId;
    }

    public function setCreatedByIntegrationId(?string $createdByIntegrationId): void
    {
        $this->createdByIntegrationId = $createdByIntegrationId;
    }

    public function getCreatedByUserId(): ?string
    {
        return $this->createdByUserId;
    }

    public function setCreatedByUserId(?string $createdByUserId): void
    {
        $this->createdByUserId = $createdByUserId;
    }

    public function getCreatedByIntegration(): ?IntegrationEntity
    {
        return $this->createdByIntegration;
    }

    public function setCreatedByIntegration(?IntegrationEntity $createdByIntegration): void
    {
        $this->createdByIntegration = $createdByIntegration;
    }

    public function getCreatedByUser(): ?UserEntity
    {
        return $this->createdByUser;
    }

    public function setCreatedByUser(?UserEntity $createdByUser): void
    {
        $this->createdByUser = $createdByUser;
    }
}
