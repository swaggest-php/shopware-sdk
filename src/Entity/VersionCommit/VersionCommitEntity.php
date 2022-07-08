<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\VersionCommit;

use Swaggest\ShopwareSdk\Entity\Entity;
use Swaggest\ShopwareSdk\Entity\EntityIdTrait;
use Swaggest\ShopwareSdk\Entity\Version\VersionEntity;
use Swaggest\ShopwareSdk\Entity\VersionCommitData\VersionCommitDataCollection;

final class VersionCommitEntity extends Entity
{
    use EntityIdTrait;

    protected ?string $userId;

    protected ?string $integrationId;

    protected ?int $autoIncrement;

    protected bool $isMerge;

    protected ?string $message;

    protected ?VersionCommitDataCollection $data;

    protected ?VersionEntity $version;

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

    public function getIsMerge(): bool
    {
        return $this->isMerge;
    }

    public function setIsMerge(bool $isMerge): void
    {
        $this->isMerge = $isMerge;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(?string $message): void
    {
        $this->message = $message;
    }

    public function getData(): ?VersionCommitDataCollection
    {
        return $this->data;
    }

    public function setData(?VersionCommitDataCollection $data): void
    {
        $this->data = $data;
    }

    public function getVersion(): ?VersionEntity
    {
        return $this->version;
    }

    public function setVersion(?VersionEntity $version): void
    {
        $this->version = $version;
    }
}
