<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\IntegrationRole;

use Swaggest\ShopwareSdk\Entity\AclRole\AclRoleEntity;
use Swaggest\ShopwareSdk\Entity\Entity;
use Swaggest\ShopwareSdk\Entity\Integration\IntegrationEntity;

final class IntegrationRoleEntity extends Entity
{
    protected string $integrationId;

    protected string $aclRoleId;

    protected ?IntegrationEntity $integration;

    protected ?AclRoleEntity $role;

    public function getIntegrationId(): string
    {
        return $this->integrationId;
    }

    public function setIntegrationId(string $integrationId): void
    {
        $this->integrationId = $integrationId;
    }

    public function getAclRoleId(): string
    {
        return $this->aclRoleId;
    }

    public function setAclRoleId(string $aclRoleId): void
    {
        $this->aclRoleId = $aclRoleId;
    }

    public function getIntegration(): ?IntegrationEntity
    {
        return $this->integration;
    }

    public function setIntegration(?IntegrationEntity $integration): void
    {
        $this->integration = $integration;
    }

    public function getRole(): ?AclRoleEntity
    {
        return $this->role;
    }

    public function setRole(?AclRoleEntity $role): void
    {
        $this->role = $role;
    }
}
