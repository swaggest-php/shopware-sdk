<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\Script;

use Swaggest\ShopwareSdk\Entity\App\AppEntity;
use Swaggest\ShopwareSdk\Entity\Entity;
use Swaggest\ShopwareSdk\Entity\EntityIdTrait;

final class ScriptEntity extends Entity
{
    use EntityIdTrait;

    protected string $script;

    protected string $hook;

    protected string $name;

    protected bool $active;

    protected ?string $appId;

    protected ?AppEntity $app;

    public function getScript(): string
    {
        return $this->script;
    }

    public function setScript(string $script): void
    {
        $this->script = $script;
    }

    public function getHook(): string
    {
        return $this->hook;
    }

    public function setHook(string $hook): void
    {
        $this->hook = $hook;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getActive(): bool
    {
        return $this->active;
    }

    public function setActive(bool $active): void
    {
        $this->active = $active;
    }

    public function getAppId(): ?string
    {
        return $this->appId;
    }

    public function setAppId(?string $appId): void
    {
        $this->appId = $appId;
    }

    public function getApp(): ?AppEntity
    {
        return $this->app;
    }

    public function setApp(?AppEntity $app): void
    {
        $this->app = $app;
    }
}
