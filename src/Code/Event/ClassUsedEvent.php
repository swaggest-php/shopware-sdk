<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Code\Event;

use Symfony\Contracts\EventDispatcher\Event;

final class ClassUsedEvent extends Event
{
    public function __construct(private string $class)
    {
    }

    public function getClass(): string
    {
        return $this->class;
    }
}
