<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\User;

use Swaggest\ShopwareSdk\Entity\AclRole\AclRoleCollection;
use Swaggest\ShopwareSdk\Entity\Entity;
use Swaggest\ShopwareSdk\Entity\EntityIdTrait;
use Swaggest\ShopwareSdk\Entity\ImportExportLog\ImportExportLogCollection;
use Swaggest\ShopwareSdk\Entity\Locale\LocaleEntity;
use Swaggest\ShopwareSdk\Entity\Media\MediaCollection;
use Swaggest\ShopwareSdk\Entity\Media\MediaEntity;
use Swaggest\ShopwareSdk\Entity\Notification\NotificationCollection;
use Swaggest\ShopwareSdk\Entity\Order\OrderCollection;
use Swaggest\ShopwareSdk\Entity\StateMachineHistory\StateMachineHistoryCollection;
use Swaggest\ShopwareSdk\Entity\UserAccessKey\UserAccessKeyCollection;
use Swaggest\ShopwareSdk\Entity\UserConfig\UserConfigCollection;
use Swaggest\ShopwareSdk\Entity\UserRecovery\UserRecoveryEntity;

final class UserEntity extends Entity
{
    use EntityIdTrait;

    protected string $localeId;

    protected ?string $avatarId;

    protected string $username;

    protected string $password;

    protected string $firstName;

    protected string $lastName;

    protected ?string $title;

    protected string $email;

    protected ?bool $active;

    protected ?bool $admin;

    protected ?\DateTimeInterface $lastUpdatedPasswordAt;

    protected string $timeZone;

    protected ?array $customFields;

    protected ?LocaleEntity $locale;

    protected ?MediaEntity $avatarMedia;

    protected ?MediaCollection $media;

    protected ?UserAccessKeyCollection $accessKeys;

    protected ?UserConfigCollection $configs;

    protected ?StateMachineHistoryCollection $stateMachineHistoryEntries;

    protected ?ImportExportLogCollection $importExportLogEntries;

    protected ?AclRoleCollection $aclRoles;

    protected ?UserRecoveryEntity $recoveryUser;

    protected ?string $storeToken;

    protected ?OrderCollection $createdOrders;

    protected ?OrderCollection $updatedOrders;

    protected ?NotificationCollection $createdNotifications;

    public function getLocaleId(): string
    {
        return $this->localeId;
    }

    public function setLocaleId(string $localeId): void
    {
        $this->localeId = $localeId;
    }

    public function getAvatarId(): ?string
    {
        return $this->avatarId;
    }

    public function setAvatarId(?string $avatarId): void
    {
        $this->avatarId = $avatarId;
    }

    public function getUsername(): string
    {
        return $this->username;
    }

    public function setUsername(string $username): void
    {
        $this->username = $username;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    public function getFirstName(): string
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName): void
    {
        $this->firstName = $firstName;
    }

    public function getLastName(): string
    {
        return $this->lastName;
    }

    public function setLastName(string $lastName): void
    {
        $this->lastName = $lastName;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): void
    {
        $this->title = $title;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function getActive(): ?bool
    {
        return $this->active;
    }

    public function setActive(?bool $active): void
    {
        $this->active = $active;
    }

    public function getAdmin(): ?bool
    {
        return $this->admin;
    }

    public function setAdmin(?bool $admin): void
    {
        $this->admin = $admin;
    }

    public function getLastUpdatedPasswordAt(): ?\DateTimeInterface
    {
        return $this->lastUpdatedPasswordAt;
    }

    public function setLastUpdatedPasswordAt(?\DateTimeInterface $lastUpdatedPasswordAt): void
    {
        $this->lastUpdatedPasswordAt = $lastUpdatedPasswordAt;
    }

    public function getTimeZone(): string
    {
        return $this->timeZone;
    }

    public function setTimeZone(string $timeZone): void
    {
        $this->timeZone = $timeZone;
    }

    public function getCustomFields(): ?array
    {
        return $this->customFields;
    }

    public function setCustomFields(?array $customFields): void
    {
        $this->customFields = $customFields;
    }

    public function getLocale(): ?LocaleEntity
    {
        return $this->locale;
    }

    public function setLocale(?LocaleEntity $locale): void
    {
        $this->locale = $locale;
    }

    public function getAvatarMedia(): ?MediaEntity
    {
        return $this->avatarMedia;
    }

    public function setAvatarMedia(?MediaEntity $avatarMedia): void
    {
        $this->avatarMedia = $avatarMedia;
    }

    public function getMedia(): ?MediaCollection
    {
        return $this->media;
    }

    public function setMedia(?MediaCollection $media): void
    {
        $this->media = $media;
    }

    public function getAccessKeys(): ?UserAccessKeyCollection
    {
        return $this->accessKeys;
    }

    public function setAccessKeys(?UserAccessKeyCollection $accessKeys): void
    {
        $this->accessKeys = $accessKeys;
    }

    public function getConfigs(): ?UserConfigCollection
    {
        return $this->configs;
    }

    public function setConfigs(?UserConfigCollection $configs): void
    {
        $this->configs = $configs;
    }

    public function getStateMachineHistoryEntries(): ?StateMachineHistoryCollection
    {
        return $this->stateMachineHistoryEntries;
    }

    public function setStateMachineHistoryEntries(?StateMachineHistoryCollection $stateMachineHistoryEntries): void
    {
        $this->stateMachineHistoryEntries = $stateMachineHistoryEntries;
    }

    public function getImportExportLogEntries(): ?ImportExportLogCollection
    {
        return $this->importExportLogEntries;
    }

    public function setImportExportLogEntries(?ImportExportLogCollection $importExportLogEntries): void
    {
        $this->importExportLogEntries = $importExportLogEntries;
    }

    public function getAclRoles(): ?AclRoleCollection
    {
        return $this->aclRoles;
    }

    public function setAclRoles(?AclRoleCollection $aclRoles): void
    {
        $this->aclRoles = $aclRoles;
    }

    public function getRecoveryUser(): ?UserRecoveryEntity
    {
        return $this->recoveryUser;
    }

    public function setRecoveryUser(?UserRecoveryEntity $recoveryUser): void
    {
        $this->recoveryUser = $recoveryUser;
    }

    public function getStoreToken(): ?string
    {
        return $this->storeToken;
    }

    public function setStoreToken(?string $storeToken): void
    {
        $this->storeToken = $storeToken;
    }

    public function getCreatedOrders(): ?OrderCollection
    {
        return $this->createdOrders;
    }

    public function setCreatedOrders(?OrderCollection $createdOrders): void
    {
        $this->createdOrders = $createdOrders;
    }

    public function getUpdatedOrders(): ?OrderCollection
    {
        return $this->updatedOrders;
    }

    public function setUpdatedOrders(?OrderCollection $updatedOrders): void
    {
        $this->updatedOrders = $updatedOrders;
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
