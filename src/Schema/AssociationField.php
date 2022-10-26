<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Schema;

use Swaggest\ShopwareSdk\Code\CaseConverterTrait;
use Swaggest\ShopwareSdk\Exception\AssociationException;

/**
 * @internal
 */
final class AssociationField extends AbstractField
{
    use CaseConverterTrait;

    public const ONE_TO_ONE = 'one_to_one';

    public const ONE_TO_MANY = 'one_to_many';

    public const MANY_TO_ONE = 'many_to_one';

    public const MANY_TO_MANY = 'many_to_many';
    
    public function __construct(
        string $name,
        private string $relationType,
        private string $entity,
        private string $localField,
        private string $referenceField,
        private ?string $primary,
        private ?string $mapping,
        private ?string $reference,
        private ?string $local,
    ) {
        parent::__construct($name);

        if (!\in_array($this->relationType, [self::ONE_TO_ONE, self::ONE_TO_MANY, self::MANY_TO_ONE, self::MANY_TO_MANY], true)) {
            throw new AssociationException('Unknown relation type: ' . $this->relationType);
        }

        if (self::ONE_TO_MANY === $this->relationType && null === $this->primary) {
            throw $this->createAssociationException($this->name, 'one-to-many', 'primary');
        }

        if (self::MANY_TO_MANY === $this->relationType) {
            if (null === $this->local) {
                throw $this->createAssociationException($this->name, 'many-to-many', 'local');
            }

            if (null === $this->reference) {
                throw $this->createAssociationException($this->name, 'many-to-many', 'reference');
            }

            if (null === $this->mapping) {
                throw $this->createAssociationException($this->name, 'many-to-many', 'mapping');
            }
        }
    }

    public function getRelationType(): string
    {
        return $this->relationType;
    }

    public function getEntity(): string
    {
        return $this->entity;
    }

    public function getLocalField(): string
    {
        return $this->localField;
    }

    public function getReferenceField(): string
    {
        return $this->referenceField;
    }

    public function getReferenceDefinitionClass(): string
    {
        $entityClassName = $this->snakeToPascalCase($this->entity);

        return \sprintf('Swaggest\\ShopwareSdk\\Entity\\%s\\%sDefinition', $entityClassName, $entityClassName);
    }

    public function getPrimary(): ?string
    {
        return $this->primary;
    }

    public function getMapping(): ?string
    {
        return $this->mapping;
    }

    public function getReference(): ?string
    {
        return $this->reference;
    }

    public function getLocal(): ?string
    {
        return $this->local;
    }

    private function createAssociationException(string $name, string $relationship, string $propertyName): AssociationException
    {
        throw new AssociationException(\sprintf(
            'Field %s is a %s relationship and thus needs to have the %s property set',
            $name,
            $relationship,
            $propertyName
        ));
    }
}
