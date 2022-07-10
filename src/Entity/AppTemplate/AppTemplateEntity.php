<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\AppTemplate;

use Swaggest\ShopwareSdk\Entity\App\AppEntity;
use Swaggest\ShopwareSdk\Entity\Entity;

final class AppTemplateEntity extends Entity
{
    protected string $template;

    protected string $path;

    protected bool $active;

    protected string $appId;

    protected ?AppEntity $app;

    public function getTemplate(): string
    {
        return $this->template;
    }

    public function setTemplate(string $template): void
    {
        $this->template = $template;
    }

    public function getPath(): string
    {
        return $this->path;
    }

    public function setPath(string $path): void
    {
        $this->path = $path;
    }

    public function getActive(): bool
    {
        return $this->active;
    }

    public function setActive(bool $active): void
    {
        $this->active = $active;
    }

    public function getAppId(): string
    {
        return $this->appId;
    }

    public function setAppId(string $appId): void
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
