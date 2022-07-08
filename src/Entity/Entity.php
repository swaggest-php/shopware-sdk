<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity;

use DateTimeInterface;
use InvalidArgumentException;
use Swaggest\ShopwareSdk\Struct\Struct;

class Entity extends Struct
{
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

    public function getCreatedAt(): DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(DateTimeInterface $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    public function getUpdatedAt(): DateTimeInterface
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

    public function getApiAlias(): string
    {
        if ($this->entityName !== null) {
            return $this->entityName;
        }

        $class = static::class;
        $class = \explode('\\', $class);
        $class = \end($class);

        $this->entityName = \preg_replace(
            '/_entity$/',
            '',
            \ltrim(\mb_strtolower((string) \preg_replace('/[A-Z]/', '_$0', $class)), '_')
        );

        return $this->entityName;
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
