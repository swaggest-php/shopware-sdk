<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\ImportExportFile;

use Swaggest\ShopwareSdk\Entity\Entity;
use Swaggest\ShopwareSdk\Entity\EntityIdTrait;
use Swaggest\ShopwareSdk\Entity\ImportExportLog\ImportExportLogEntity;

final class ImportExportFileEntity extends Entity
{
    use EntityIdTrait;

    protected string $originalName;

    protected string $path;

    protected \DateTimeInterface $expireDate;

    protected ?int $size;

    protected ?ImportExportLogEntity $log;

    protected ?string $accessToken;

    public function getOriginalName(): string
    {
        return $this->originalName;
    }

    public function setOriginalName(string $originalName): void
    {
        $this->originalName = $originalName;
    }

    public function getPath(): string
    {
        return $this->path;
    }

    public function setPath(string $path): void
    {
        $this->path = $path;
    }

    public function getExpireDate(): \DateTimeInterface
    {
        return $this->expireDate;
    }

    public function setExpireDate(\DateTimeInterface $expireDate): void
    {
        $this->expireDate = $expireDate;
    }

    public function getSize(): ?int
    {
        return $this->size;
    }

    public function setSize(?int $size): void
    {
        $this->size = $size;
    }

    public function getLog(): ?ImportExportLogEntity
    {
        return $this->log;
    }

    public function setLog(?ImportExportLogEntity $log): void
    {
        $this->log = $log;
    }

    public function getAccessToken(): ?string
    {
        return $this->accessToken;
    }

    public function setAccessToken(?string $accessToken): void
    {
        $this->accessToken = $accessToken;
    }
}
