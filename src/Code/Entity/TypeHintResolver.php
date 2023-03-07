<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Code\Entity;

use Psr\EventDispatcher\EventDispatcherInterface;
use Swaggest\ShopwareSdk\Code\CaseConverterTrait;
use Swaggest\ShopwareSdk\Code\Event\ClassUsedEvent;
use Swaggest\ShopwareSdk\Entity\AbstractEntityDefinition;
use Swaggest\ShopwareSdk\Exception\EntityGeneratorException;
use Swaggest\ShopwareSdk\Schema\AbstractField;
use Swaggest\ShopwareSdk\Schema\AssociationField;
use Swaggest\ShopwareSdk\Schema\Field;

final class TypeHintResolver
{
    use CaseConverterTrait;

    public function __construct(private EventDispatcherInterface $eventDispatcher)
    {
    }

    public function resolve(AbstractField $field, AbstractEntityDefinition $entityDefinition): string
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

        if (!$field instanceof AssociationField) {
            throw new EntityGeneratorException('Unsupported field type: ' . $field::class);
        }

        $entityName = $this->snakeToPascalCase($field->getEntity());

        return match ($field->getRelationType()) {
            AssociationField::ONE_TO_ONE, AssociationField::MANY_TO_ONE => $this->getAssociationTypeHint($entityName, 'Entity', $entityDefinition),
            AssociationField::ONE_TO_MANY, AssociationField::MANY_TO_MANY => $this->getAssociationTypeHint($entityName, 'Collection', $entityDefinition),
        };
    }

    private function getAssociationTypeHint(string $entityName, string $classType, AbstractEntityDefinition $entityDefinition): string
    {
        $fullClass = $this->getFullClass($entityName, $classType);

        $this->eventDispatcher->dispatch(new ClassUsedEvent($fullClass, $entityDefinition));

        return $entityName . $classType;
    }

    private function getFullClass(string $entityName, string $classType): string
    {
        return \sprintf('Swaggest\\ShopwareSdk\\Entity\\%s\\%s%s', $entityName, $entityName, $classType);
    }
}
