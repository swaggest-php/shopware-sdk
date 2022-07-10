<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\LandingPageSalesChannel;

use Swaggest\ShopwareSdk\Entity\Entity;
use Swaggest\ShopwareSdk\Entity\EntityIdTrait;
use Swaggest\ShopwareSdk\Entity\LandingPage\LandingPageEntity;
use Swaggest\ShopwareSdk\Entity\SalesChannel\SalesChannelEntity;

final class LandingPageSalesChannelEntity extends Entity
{
    use EntityIdTrait;

    protected string $landingPageId;

    protected ?string $landingPageVersionId;

    protected string $salesChannelId;

    protected ?LandingPageEntity $landingPage;

    protected ?SalesChannelEntity $salesChannel;

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

    public function getSalesChannelId(): string
    {
        return $this->salesChannelId;
    }

    public function setSalesChannelId(string $salesChannelId): void
    {
        $this->salesChannelId = $salesChannelId;
    }

    public function getLandingPage(): ?LandingPageEntity
    {
        return $this->landingPage;
    }

    public function setLandingPage(?LandingPageEntity $landingPage): void
    {
        $this->landingPage = $landingPage;
    }

    public function getSalesChannel(): ?SalesChannelEntity
    {
        return $this->salesChannel;
    }

    public function setSalesChannel(?SalesChannelEntity $salesChannel): void
    {
        $this->salesChannel = $salesChannel;
    }
}
