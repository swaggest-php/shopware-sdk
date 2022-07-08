<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\AclUserRole;

use Swaggest\ShopwareSdk\Entity\AclRole\AclRoleEntity;
use Swaggest\ShopwareSdk\Entity\Entity;
use Swaggest\ShopwareSdk\Entity\EntityIdTrait;
use Swaggest\ShopwareSdk\Entity\User\UserEntity;

final class AclUserRoleEntity extends Entity
{
    use EntityIdTrait;

    protected string $userId;

    protected string $aclRoleId;

    protected ?UserEntity $user;

    protected ?AclRoleEntity $aclRole;

    public function getUserId(): string
    {
        return $this->userId;
    }

    public function setUserId(string $userId): void
    {
        $this->userId = $userId;
    }

    public function getAclRoleId(): string
    {
        return $this->aclRoleId;
    }

    public function setAclRoleId(string $aclRoleId): void
    {
        $this->aclRoleId = $aclRoleId;
    }

    public function getUser(): ?UserEntity
    {
        return $this->user;
    }

    public function setUser(?UserEntity $user): void
    {
        $this->user = $user;
    }

    public function getAclRole(): ?AclRoleEntity
    {
        return $this->aclRole;
    }

    public function setAclRole(?AclRoleEntity $aclRole): void
    {
        $this->aclRole = $aclRole;
    }
}
