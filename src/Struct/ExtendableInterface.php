<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Struct;

interface ExtendableInterface
{
    public function addExtension(string $name, Struct $extension): void;

    /**
     * @param Struct[] $extensions
     */
    public function addExtensions(array $extensions): void;

    public function getExtension(string $name): ?Struct;

    public function hasExtension(string $name): bool;

    /**
     * @return Struct[]
     */
    public function getExtensions(): array;
}
