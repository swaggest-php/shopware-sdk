<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Internal;

use Swaggest\ShopwareSdk\Entity\AbstractEntityDefinition;
use Swaggest\ShopwareSdk\Entity\Entity;
use Swaggest\ShopwareSdk\Entity\EntityCollection;
use Swaggest\ShopwareSdk\Schema\AbstractField;
use Swaggest\ShopwareSdk\Schema\AssociationField;
use Swaggest\ShopwareSdk\Schema\Field;
use Swaggest\ShopwareSdk\Schema\FieldCollection;

final class EntityHydrator
{
    public function hydrateSearchResult(AbstractEntityDefinition $entityDefinition, array $response): EntityCollection
    {
        if (empty($response['data'])) {
            return new EntityCollection();
        }

        /** @var EntityCollection $entityCollection */
        $entityCollection = new ($entityDefinition->getCollectionClass());
        $rows = $response['data'];
        $included = $response['included'] ?? [];

        foreach ($rows as $row) {
            $entityCollection->add($this->hydrateEntity($entityDefinition, $row, $included));
        }

        return $entityCollection;
    }

    // TODO: extensions
    private function hydrateEntity(AbstractEntityDefinition $entityDefinition, array $row, array $included): Entity
    {
        $entityClass = $entityDefinition->getEntityClass();

        /** @var Entity $entity */
        $entity = new $entityClass();
        $entity->assign(['id' => $row['id']]);

        $this->hydrateAttributes($entityDefinition, $entity, $row['attributes'] ?? []);
        $this->hydrateRelationships($entityDefinition, $entity, $row['relationships'] ?? [], $included);

        return $entity;
    }

    private function hydrateAttributes(AbstractEntityDefinition $entityDefinition, Entity $entity, array $attributes): void
    {
        $fields = $this->getFieldsByType($entityDefinition, Field::class);

        /** @var Field $field */
        foreach ($fields as $field) {
            $fieldName = $field->getName();

            if ('id' === $fieldName) {
                continue;
            }

            $fieldValue = $attributes[$fieldName];

            if ('date' === $field->getType() && null !== $fieldValue) {
                $entity->assign([$fieldName => new \DateTimeImmutable($fieldValue)]);

                continue;
            }

            $entity->assign([$fieldName => $fieldValue]);
        }
    }

    private function hydrateRelationships(AbstractEntityDefinition $entityDefinition, Entity $entity, array $relationships, array $included): void
    {
        $associations = $this->getFieldsByType($entityDefinition, AssociationField::class);

        /** @var AssociationField $association */
        foreach ($associations as $association) {
            $associationName = $association->getName();
            $relationship = $relationships[$associationName]['data'];

            if (null === $relationship || [] === $relationship) {
                $entity->assign([$associationName => null]);

                continue;
            }

            /** @var AbstractEntityDefinition $referenceDefinition */
            $referenceDefinition = new ($association->getReferenceDefinitionClass());

            switch ($association->getRelationType()) {
                case AssociationField::ONE_TO_MANY:
                case AssociationField::MANY_TO_MANY:
                    $this->hydrateToMany($referenceDefinition, $entity, $associationName, $relationship, $included);
                    break;

                case AssociationField::ONE_TO_ONE:
                case AssociationField::MANY_TO_ONE:
                    $this->hydrateToOne($referenceDefinition, $entity, $associationName, $relationship, $included);
                    break;
            }
        }
    }

    private function hydrateToOne(AbstractEntityDefinition $entityDefinition, Entity $entity, string $associationName, array $relationship, array $included): void
    {
        $foundItem = $this->findIncluded($relationship['type'], $relationship['id'], $included);

        if (null === $foundItem) {
            $entity->assign([$associationName => null]);

            return;
        }

        $associationEntity = $this->hydrateEntity($entityDefinition, $foundItem, $included);

        $entity->assign([$associationName => $associationEntity]);
    }

    private function hydrateToMany(AbstractEntityDefinition $entityDefinition, Entity $entity, string $associationName, array $relationship, array $included): void
    {
        /** @var EntityCollection $collection */
        $collection = new ($entityDefinition->getCollectionClass());

        foreach ($relationship as $relationshipItem) {
            $foundItem = $this->findIncluded($relationshipItem['type'], $relationshipItem['id'], $included);

            if (null === $foundItem) {
                $entity->assign([$associationName => null]);

                return;
            }

            $collection->add($this->hydrateEntity($entityDefinition, $foundItem, $included));
        }

        $entity->assign([$associationName => $collection]);
    }

    private function getFieldsByType(AbstractEntityDefinition $entityDefinition, string $class): FieldCollection
    {
        return $entityDefinition->getFields()->filter(fn (AbstractField $field) => $field instanceof $class);
    }

    private function findIncluded(string $type, string $id, array $included): ?array
    {
        foreach ($included as $item) {
            if (\array_key_exists('type', $item) && $item['type'] === $type && $item['id'] === $id) {
                return $item;
            }
        }

        return null;
    }
}