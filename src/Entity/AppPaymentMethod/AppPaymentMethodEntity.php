<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\AppPaymentMethod;

use Swaggest\ShopwareSdk\Entity\App\AppEntity;
use Swaggest\ShopwareSdk\Entity\Entity;
use Swaggest\ShopwareSdk\Entity\Media\MediaEntity;
use Swaggest\ShopwareSdk\Entity\PaymentMethod\PaymentMethodEntity;

final class AppPaymentMethodEntity extends Entity
{
    protected string $appName;

    protected string $identifier;

    protected ?string $payUrl;

    protected ?string $finalizeUrl;

    protected ?string $appId;

    protected ?AppEntity $app;

    protected ?string $originalMediaId;

    protected ?MediaEntity $originalMedia;

    protected string $paymentMethodId;

    protected ?PaymentMethodEntity $paymentMethod;

    public function getAppName(): string
    {
        return $this->appName;
    }

    public function setAppName(string $appName): void
    {
        $this->appName = $appName;
    }

    public function getIdentifier(): string
    {
        return $this->identifier;
    }

    public function setIdentifier(string $identifier): void
    {
        $this->identifier = $identifier;
    }

    public function getPayUrl(): ?string
    {
        return $this->payUrl;
    }

    public function setPayUrl(?string $payUrl): void
    {
        $this->payUrl = $payUrl;
    }

    public function getFinalizeUrl(): ?string
    {
        return $this->finalizeUrl;
    }

    public function setFinalizeUrl(?string $finalizeUrl): void
    {
        $this->finalizeUrl = $finalizeUrl;
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

    public function getOriginalMediaId(): ?string
    {
        return $this->originalMediaId;
    }

    public function setOriginalMediaId(?string $originalMediaId): void
    {
        $this->originalMediaId = $originalMediaId;
    }

    public function getOriginalMedia(): ?MediaEntity
    {
        return $this->originalMedia;
    }

    public function setOriginalMedia(?MediaEntity $originalMedia): void
    {
        $this->originalMedia = $originalMedia;
    }

    public function getPaymentMethodId(): string
    {
        return $this->paymentMethodId;
    }

    public function setPaymentMethodId(string $paymentMethodId): void
    {
        $this->paymentMethodId = $paymentMethodId;
    }

    public function getPaymentMethod(): ?PaymentMethodEntity
    {
        return $this->paymentMethod;
    }

    public function setPaymentMethod(?PaymentMethodEntity $paymentMethod): void
    {
        $this->paymentMethod = $paymentMethod;
    }
}
