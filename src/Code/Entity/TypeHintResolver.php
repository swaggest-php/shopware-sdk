<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Code\Entity;

use Psr\EventDispatcher\EventDispatcherInterface;
use Swaggest\ShopwareSdk\Code\CaseConverterTrait;
use Swaggest\ShopwareSdk\Code\Event\ClassUsedEvent;
use Swaggest\ShopwareSdk\Exception\EntityGeneratorException;
use Swaggest\ShopwareSdk\Schema\Association;
use Swaggest\ShopwareSdk\Schema\Field;

final class TypeHintResolver
{
    use CaseConverterTrait;

    public function __construct(private EventDispatcherInterface $eventDispatcher)
    {
    }

    public function resolve(Field|Association $field): string
    {
        if ($field instanceof Field) {
            return match ($field->getType()) {
                'string', 'blob', 'password', 'text', 'uuid', 'Shopware\\Core\\Framework\\DataAbstractionLayer\\Field\\RemoteAddressField' => 'string',
                'int', 'float' => $field->getType(),
                'boolean' => 'bool',
                'json_list', 'json_object' => 'array',
                'date' => '\DateTimeInterface',
                default => throw new EntityGeneratorException('Unknown field type: ' . $field->getType()),
            };
        }

        $entityName = $this->snakeToPascalCase($field->getEntity());

        return match ($field->getRelationType()) {
            Association::ONE_TO_ONE, Association::MANY_TO_ONE => $this->getAssociationTypeHint($entityName, 'Entity'),
            Association::ONE_TO_MANY, Association::MANY_TO_MANY => $this->getAssociationTypeHint($entityName, 'Collection'),
        };
    }

    private function getAssociationTypeHint(string $entityName, string $classType): string
    {
        $this->eventDispatcher->dispatch(new ClassUsedEvent($this->getFullClass($entityName, $classType)));

        return $entityName . $classType;
    }

    private function getFullClass(string $entityName, string $classType): string
    {
        return \sprintf('Swaggest\\ShopwareSdk\\Entity\\%s\\%s%s', $entityName, $entityName, $classType);
    }
}
