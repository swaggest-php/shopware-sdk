<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Code\Entity;

use Swaggest\ShopwareSdk\Code\CaseConverterTrait;
use Swaggest\ShopwareSdk\Code\UseAwareCodeGeneratorInterface;
use Swaggest\ShopwareSdk\Entity\AbstractEntityDefinition;
use Swaggest\ShopwareSdk\Schema\AbstractField;
use Swaggest\ShopwareSdk\Schema\EntityDefinition\Processor\EntityDefinitionProcessorCollection;
use Swaggest\ShopwareSdk\Schema\EntityDefinition\Processor\EntityDefinitionProcessorInterface;
use Swaggest\ShopwareSdk\Schema\Flag\Required;

final class EntityGenerator implements UseAwareCodeGeneratorInterface
{
    use CaseConverterTrait;

    private array $uses = [];

    private string $classTemplate = <<<EOF
<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\#entity#;

use Swaggest\ShopwareSdk\Entity\Entity;
use Swaggest\ShopwareSdk\Entity\EntityIdTrait;
#uses#

final class #entity#Entity extends Entity
{
    #properties#

#functions#
}

EOF;

    private string $propertyTemplate = <<<EOF
    protected #nullable##type# $#property#;
EOF;

    private string $accessorsTemplate = <<<EOF
    public function get#propertyUc#(): #nullable##type#
    {
        return \$this->#propertyLc#;
    }

    public function set#propertyUc#(#nullable##type# $#propertyLc#): void
    {
        \$this->#propertyLc# = $#propertyLc#;
    }
EOF;

    public function __construct(
        private TypeHintResolver $typeHintResolver,
        private EntityDefinitionProcessorCollection $entityDefinitionProcessorCollection
    ) {
    }

    public function generateEntity(AbstractEntityDefinition $entityDefinition): string
    {
        $this->processEntityDefinition($entityDefinition);

        $properties = [];

        /** @var AbstractField $field */
        foreach ($entityDefinition->getFields() as $field) {
            if ($this->shouldSkip($field->getName())) {
                continue;
            }

            $property = $this->generateProperty($field, $entityDefinition);

            if (!$property) {
                continue;
            }

            $properties[] = $property;
        }

        $functions = \array_column($properties, 'functions');
        $properties = \array_column($properties, 'property');

        $entity = $entityDefinition->getEntityName();
        $entity = \explode('_', $entity);
        $entity = \array_map('ucfirst', $entity);
        $entity = \implode('', $entity);

        $parameters = [
            '#uses#' => \implode(";\n", \array_map(fn (string $use) => 'use ' . $use, $this->uses)) . ';',
            '#entity#' => \ucfirst($entity),
            '#properties#' => \implode("\n\n    ", $properties),
            '#functions#' => \implode("\n\n", $functions),
        ];

        $this->uses = [];

        return \str_replace(
            \array_keys($parameters),
            \array_values($parameters),
            $this->classTemplate
        );
    }

    public function addUse(string $class): void
    {
        if (\in_array($class, $this->uses, true)) {
            return;
        }

        $this->uses[] = $class;
    }

    private function generateProperty(AbstractField $field, AbstractEntityDefinition $definition): ?array
    {
        $isVersionField = \str_contains(\mb_strtolower($field->getName()), 'versionid');
        $isTranslation = 'translations' === $field->getName();

        $nullable = '?';

        if ($field->hasFlag(Required::class) && !$isVersionField && !$isTranslation) {
            $nullable = '';
        }

        $type = $this->typeHintResolver->resolve($field, $definition);

        $template = \str_replace(
            ['#property#', '#type#', '#nullable#'],
            [$field->getName(), $type, $nullable],
            $this->propertyTemplate
        );

        $functions = \str_replace(
            ['#propertyUc#', '#propertyLc#', '#nullable#', '#type#'],
            [\ucfirst($field->getName()), \lcfirst($field->getName()), $nullable, $type],
            $this->accessorsTemplate
        );

        return [
            'property' => \trim($template),
            'functions' => $functions,
        ];
    }

    private function shouldSkip(string $fieldName): bool
    {
        return \in_array($fieldName, ['id', 'createdAt', 'updatedAt', 'translated', 'versionId'], true);
    }

    private function processEntityDefinition(AbstractEntityDefinition $entityDefinition): void
    {
        /** @var EntityDefinitionProcessorInterface|null $processor */
        $processor = $this->entityDefinitionProcessorCollection->get($entityDefinition::class);

        if ($processor === null) {
            return;
        }

        $processor->process($entityDefinition);
    }
}
