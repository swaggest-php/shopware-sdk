<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\VersionCommitData;

use Swaggest\ShopwareSdk\Entity\Entity;
use Swaggest\ShopwareSdk\Entity\VersionCommit\VersionCommitEntity;

final class VersionCommitDataEntity extends Entity
{
    protected string $versionCommitId;

    protected ?VersionCommitEntity $commit;

    protected ?string $userId;

    protected ?string $integrationId;

    protected ?int $autoIncrement;

    protected string $entityName;

    protected array $entityId;

    protected string $action;

    protected array $payload;

    public function getVersionCommitId(): string
    {
        return $this->versionCommitId;
    }

    public function setVersionCommitId(string $versionCommitId): void
    {
        $this->versionCommitId = $versionCommitId;
    }

    public function getCommit(): ?VersionCommitEntity
    {
        return $this->commit;
    }

    public function setCommit(?VersionCommitEntity $commit): void
    {
        $this->commit = $commit;
    }

    public function getUserId(): ?string
    {
        return $this->userId;
    }

    public function setUserId(?string $userId): void
    {
        $this->userId = $userId;
    }

    public function getIntegrationId(): ?string
    {
        return $this->integrationId;
    }

    public function setIntegrationId(?string $integrationId): void
    {
        $this->integrationId = $integrationId;
    }

    public function getAutoIncrement(): ?int
    {
        return $this->autoIncrement;
    }

    public function setAutoIncrement(?int $autoIncrement): void
    {
        $this->autoIncrement = $autoIncrement;
    }

    public function getEntityName(): string
    {
        return $this->entityName;
    }

    public function setEntityName(string $entityName): void
    {
        $this->entityName = $entityName;
    }

    public function getEntityId(): array
    {
        return $this->entityId;
    }

    public function setEntityId(array $entityId): void
    {
        $this->entityId = $entityId;
    }

    public function getAction(): string
    {
        return $this->action;
    }

    public function setAction(string $action): void
    {
        $this->action = $action;
    }

    public function getPayload(): array
    {
        return $this->payload;
    }

    public function setPayload(array $payload): void
    {
        $this->payload = $payload;
    }
}
