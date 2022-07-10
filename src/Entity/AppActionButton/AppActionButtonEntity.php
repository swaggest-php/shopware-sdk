<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\AppActionButton;

use Swaggest\ShopwareSdk\Entity\App\AppEntity;
use Swaggest\ShopwareSdk\Entity\AppActionButtonTranslation\AppActionButtonTranslationCollection;
use Swaggest\ShopwareSdk\Entity\Entity;

final class AppActionButtonEntity extends Entity
{
    protected string $entity;

    protected string $view;

    protected string $url;

    protected string $action;

    protected bool $openNewTab;

    protected string $label;

    protected ?AppActionButtonTranslationCollection $translations;

    protected string $appId;

    protected ?AppEntity $app;

    public function getEntity(): string
    {
        return $this->entity;
    }

    public function setEntity(string $entity): void
    {
        $this->entity = $entity;
    }

    public function getView(): string
    {
        return $this->view;
    }

    public function setView(string $view): void
    {
        $this->view = $view;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function setUrl(string $url): void
    {
        $this->url = $url;
    }

    public function getAction(): string
    {
        return $this->action;
    }

    public function setAction(string $action): void
    {
        $this->action = $action;
    }

    public function getOpenNewTab(): bool
    {
        return $this->openNewTab;
    }

    public function setOpenNewTab(bool $openNewTab): void
    {
        $this->openNewTab = $openNewTab;
    }

    public function getLabel(): string
    {
        return $this->label;
    }

    public function setLabel(string $label): void
    {
        $this->label = $label;
    }

    public function getTranslations(): ?AppActionButtonTranslationCollection
    {
        return $this->translations;
    }

    public function setTranslations(?AppActionButtonTranslationCollection $translations): void
    {
        $this->translations = $translations;
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
