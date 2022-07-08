<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Code\EntityDefinition;

use Psr\EventDispatcher\EventDispatcherInterface;
use Swaggest\ShopwareSdk\Code\Event\ClassUsedEvent;

final class FieldGenerator
{
    public function __construct(
        private FlagGenerator $flagGenerator,
        private EventDispatcherInterface $eventDispatcher
    ) {
    }

    public function generateField(string $name, array $field): string
    {
        $this->eventDispatcher->dispatch(new ClassUsedEvent('Swaggest\ShopwareSdk\Schema\Field'));

        $output = \sprintf("(new Field('%s', '%s'))->addFlags(", $name, $field['type']);

        $flags = [];

        foreach ($field['flags'] as $flagName => $flagDescriptor) {
            $flags[] = $this->flagGenerator->generateFlag($flagName, $flagDescriptor);
        }

        $output .= \sprintf('%s)', \implode(', ', $flags));

        return $output;
    }
}
