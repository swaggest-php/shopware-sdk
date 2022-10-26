<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity;

use DateTimeInterface;
use InvalidArgumentException;
use Swaggest\ShopwareSdk\Struct\Struct;

/**
 * Copyright 2019 shopware AG
 * Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated
 * documentation files (the "Software"), to deal in the Software without restriction, including without limitation the
 * rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit
 * persons to whom the Software is furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all
 * copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO
 * THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT,
 * TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 */
class Entity extends Struct
{
    use EntityIdTrait;

    protected ?string $versionId = null;

    protected array $translated = [];

    protected ?DateTimeInterface $createdAt = null;

    protected ?DateTimeInterface $updatedAt = null;

    private ?string $entityName = null;

    public function __get(string $name): mixed
    {
        return $this->{$name};
    }

    public function __set(string $name, mixed $value): void
    {
        $this->{$name} = $value;
    }

    public function __isset(string $name): bool
    {
        return isset($this->{$name});
    }

    public function getVersionId(): ?string
    {
        return $this->versionId;
    }

    public function setVersionId(string $versionId): void
    {
        $this->versionId = $versionId;
    }

    public function get(string $property): mixed
    {
        if ($this->has($property)) {
            return $this->{$property};
        }

        if ($this->hasExtension($property)) {
            return $this->getExtension($property);
        }

        throw new InvalidArgumentException(
            sprintf('Property %s do not exist in class %s', $property, self::class)
        );
    }

    public function has(string $property): bool
    {
        return property_exists($this, $property);
    }

    public function getTranslated(): array
    {
        return $this->translated;
    }

    public function getTranslation(string $field): mixed
    {
        return $this->translated[$field] ?? null;
    }

    public function setTranslated(array $translated): void
    {
        $this->translated = $translated;
    }

    public function addTranslated(string $key, $value): void
    {
        $this->translated[$key] = $value;
    }

    public function getCreatedAt(): ?DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(DateTimeInterface $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    public function getUpdatedAt(): ?DateTimeInterface
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(DateTimeInterface $updatedAt): void
    {
        $this->updatedAt = $updatedAt;
    }

    public function jsonSerialize(): array
    {
        $data = parent::jsonSerialize();

        unset($data['entityName']);

        return $data;
    }

    public function getEntityName(): ?string
    {
        return $this->entityName;
    }

    public function setEntityName(string $entityName): void
    {
        $this->entityName = $entityName;
    }
}
