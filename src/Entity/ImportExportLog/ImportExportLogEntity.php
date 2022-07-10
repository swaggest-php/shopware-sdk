<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\ImportExportLog;

use Swaggest\ShopwareSdk\Entity\Entity;
use Swaggest\ShopwareSdk\Entity\ImportExportFile\ImportExportFileEntity;
use Swaggest\ShopwareSdk\Entity\ImportExportProfile\ImportExportProfileEntity;
use Swaggest\ShopwareSdk\Entity\User\UserEntity;

final class ImportExportLogEntity extends Entity
{
    protected string $activity;

    protected string $state;

    protected int $records;

    protected ?string $userId;

    protected ?string $profileId;

    protected ?string $fileId;

    protected ?string $invalidRecordsLogId;

    protected ?string $username;

    protected ?string $profileName;

    protected array $config;

    protected ?array $result;

    protected ?UserEntity $user;

    protected ?ImportExportProfileEntity $profile;

    protected ?ImportExportFileEntity $file;

    protected ?ImportExportLogEntity $invalidRecordsLog;

    protected ?ImportExportLogEntity $failedImportLog;

    public function getActivity(): string
    {
        return $this->activity;
    }

    public function setActivity(string $activity): void
    {
        $this->activity = $activity;
    }

    public function getState(): string
    {
        return $this->state;
    }

    public function setState(string $state): void
    {
        $this->state = $state;
    }

    public function getRecords(): int
    {
        return $this->records;
    }

    public function setRecords(int $records): void
    {
        $this->records = $records;
    }

    public function getUserId(): ?string
    {
        return $this->userId;
    }

    public function setUserId(?string $userId): void
    {
        $this->userId = $userId;
    }

    public function getProfileId(): ?string
    {
        return $this->profileId;
    }

    public function setProfileId(?string $profileId): void
    {
        $this->profileId = $profileId;
    }

    public function getFileId(): ?string
    {
        return $this->fileId;
    }

    public function setFileId(?string $fileId): void
    {
        $this->fileId = $fileId;
    }

    public function getInvalidRecordsLogId(): ?string
    {
        return $this->invalidRecordsLogId;
    }

    public function setInvalidRecordsLogId(?string $invalidRecordsLogId): void
    {
        $this->invalidRecordsLogId = $invalidRecordsLogId;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(?string $username): void
    {
        $this->username = $username;
    }

    public function getProfileName(): ?string
    {
        return $this->profileName;
    }

    public function setProfileName(?string $profileName): void
    {
        $this->profileName = $profileName;
    }

    public function getConfig(): array
    {
        return $this->config;
    }

    public function setConfig(array $config): void
    {
        $this->config = $config;
    }

    public function getResult(): ?array
    {
        return $this->result;
    }

    public function setResult(?array $result): void
    {
        $this->result = $result;
    }

    public function getUser(): ?UserEntity
    {
        return $this->user;
    }

    public function setUser(?UserEntity $user): void
    {
        $this->user = $user;
    }

    public function getProfile(): ?ImportExportProfileEntity
    {
        return $this->profile;
    }

    public function setProfile(?ImportExportProfileEntity $profile): void
    {
        $this->profile = $profile;
    }

    public function getFile(): ?ImportExportFileEntity
    {
        return $this->file;
    }

    public function setFile(?ImportExportFileEntity $file): void
    {
        $this->file = $file;
    }

    public function getInvalidRecordsLog(): ?self
    {
        return $this->invalidRecordsLog;
    }

    public function setInvalidRecordsLog(?self $invalidRecordsLog): void
    {
        $this->invalidRecordsLog = $invalidRecordsLog;
    }

    public function getFailedImportLog(): ?self
    {
        return $this->failedImportLog;
    }

    public function setFailedImportLog(?self $failedImportLog): void
    {
        $this->failedImportLog = $failedImportLog;
    }
}
