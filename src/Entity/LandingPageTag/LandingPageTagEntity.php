<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\LandingPageTag;

use Swaggest\ShopwareSdk\Entity\Entity;
use Swaggest\ShopwareSdk\Entity\LandingPage\LandingPageEntity;
use Swaggest\ShopwareSdk\Entity\Tag\TagEntity;

final class LandingPageTagEntity extends Entity
{
    protected string $landingPageId;

    protected ?string $landingPageVersionId;

    protected string $tagId;

    protected ?LandingPageEntity $landingPage;

    protected ?TagEntity $tag;

    public function getLandingPageId(): string
    {
        return $this->landingPageId;
    }

    public function setLandingPageId(string $landingPageId): void
    {
        $this->landingPageId = $landingPageId;
    }

    public function getLandingPageVersionId(): ?string
    {
        return $this->landingPageVersionId;
    }

    public function setLandingPageVersionId(?string $landingPageVersionId): void
    {
        $this->landingPageVersionId = $landingPageVersionId;
    }

    public function getTagId(): string
    {
        return $this->tagId;
    }

    public function setTagId(string $tagId): void
    {
        $this->tagId = $tagId;
    }

    public function getLandingPage(): ?LandingPageEntity
    {
        return $this->landingPage;
    }

    public function setLandingPage(?LandingPageEntity $landingPage): void
    {
        $this->landingPage = $landingPage;
    }

    public function getTag(): ?TagEntity
    {
        return $this->tag;
    }

    public function setTag(?TagEntity $tag): void
    {
        $this->tag = $tag;
    }
}
