<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Code\Event;

use Swaggest\ShopwareSdk\Entity\AbstractEntityDefinition;
use Symfony\Contracts\EventDispatcher\Event;

final class ClassUsedEvent extends Event
{
    public function __construct(
        private string $class,
        private ?AbstractEntityDefinition $entityDefinition = null
    ) {
    }

    public function getClass(): string
    {
        return $this->class;
    }

    public function getEntityDefinition(): ?AbstractEntityDefinition
    {
        return $this->entityDefinition;
    }
}
