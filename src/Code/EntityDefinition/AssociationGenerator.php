<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Code\EntityDefinition;

use Psr\EventDispatcher\EventDispatcherInterface;
use Swaggest\ShopwareSdk\Code\Event\ClassUsedEvent;
use Swaggest\ShopwareSdk\Code\PrepareFlagsTrait;
use Swaggest\ShopwareSdk\Exception\AssociationGeneratorException;

final class AssociationGenerator
{
    use PrepareFlagsTrait;

    public function __construct(
        private FlagGenerator $flagGenerator,
        private EventDispatcherInterface $eventDispatcher
    ) {
    }

    public function generateAssociation(string $fieldName, array $field): string
    {
        $this->eventDispatcher->dispatch(new ClassUsedEvent('Swaggest\\ShopwareSdk\\Schema\\Association'));

        $relationType = match ($field['relation']) {
            'one_to_one' => 'Association::ONE_TO_ONE',
            'one_to_many' => 'Association::ONE_TO_MANY',
            'many_to_one' => 'Association::MANY_TO_ONE',
            'many_to_many' => 'Association::MANY_TO_MANY',
            default => throw new AssociationGeneratorException('Unknown relation type: ' . $field['relation'])
        };

        $primary = $field['primary'] ?? null;
        $mapping = $field['mapping'] ?? null;
        $reference = $field['reference'] ?? null;
        $local = $field['local'] ?? null;

        $output = \sprintf(
            "(new Association('%s', %s, '%s', '%s', '%s', %s, %s, %s, %s))->addFlags(",
            $fieldName,
            $relationType,
            $field['entity'],
            $field['localField'],
            $field['referenceField'],
            $primary ? "'$primary'" : 'null',
            $mapping ? "'$mapping'" : 'null',
            $reference ? "'$reference'" : 'null',
            $local ? "'$local'" : 'null'
        );

        return $output . $this->prepareFlags($field['flags'] ?? []) . ')';
    }
}
