<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\AppCmsBlock;

use Swaggest\ShopwareSdk\Entity\App\AppEntity;
use Swaggest\ShopwareSdk\Entity\AppCmsBlockTranslation\AppCmsBlockTranslationCollection;
use Swaggest\ShopwareSdk\Entity\Entity;
use Swaggest\ShopwareSdk\Entity\EntityIdTrait;

final class AppCmsBlockEntity extends Entity
{
    use EntityIdTrait;

    protected string $name;

    protected array $block;

    protected string $template;

    protected string $styles;

    protected string $label;

    protected AppCmsBlockTranslationCollection $translations;

    protected string $appId;

    protected ?AppEntity $app;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getBlock(): array
    {
        return $this->block;
    }

    public function setBlock(array $block): void
    {
        $this->block = $block;
    }

    public function getTemplate(): string
    {
        return $this->template;
    }

    public function setTemplate(string $template): void
    {
        $this->template = $template;
    }

    public function getStyles(): string
    {
        return $this->styles;
    }

    public function setStyles(string $styles): void
    {
        $this->styles = $styles;
    }

    public function getLabel(): string
    {
        return $this->label;
    }

    public function setLabel(string $label): void
    {
        $this->label = $label;
    }

    public function getTranslations(): AppCmsBlockTranslationCollection
    {
        return $this->translations;
    }

    public function setTranslations(AppCmsBlockTranslationCollection $translations): void
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
