<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Struct;

trait ExtendableTrait
{
    /**
     * @var Struct[]
     */
    protected array $extensions = [];

    public function addExtension(string $name, Struct $extension): void
    {
        $this->extensions[$name] = $extension;
    }

    /**
     * @param Struct[] $extensions
     */
    public function addExtensions(array $extensions): void
    {
        foreach ($extensions as $key => $extension) {
            $this->addExtension($key, $extension);
        }
    }

    public function getExtension(string $name): ?Struct
    {
        return $this->extensions[$name] ?? null;
    }

    public function getExtensionOfType(string $name, string $type): ?Struct
    {
        if ($this->hasExtensionOfType($name, $type)) {
            return $this->getExtension($name);
        }

        return null;
    }

    public function hasExtension(string $name): bool
    {
        return isset($this->extensions[$name]);
    }

    public function hasExtensionOfType(string $name, string $type): bool
    {
        return $this->hasExtension($name) && $this->getExtension($name)::class === $type;
    }

    /**
     * @return Struct[]
     */
    public function getExtensions(): array
    {
        return $this->extensions;
    }

    public function setExtensions(array $extensions): void
    {
        $this->extensions = $extensions;
    }

    public function removeExtension(string $name): void
    {
        if (isset($this->extensions[$name])) {
            unset($this->extensions[$name]);
        }
    }
}
