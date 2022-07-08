<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Code\EntityDefinition;

use Swaggest\ShopwareSdk\Code\CaseConverterTrait;
use Swaggest\ShopwareSdk\Code\UseAwareCodeGeneratorInterface;

final class EntityDefinitionGenerator implements UseAwareCodeGeneratorInterface
{
    use CaseConverterTrait;

    private array $uses = [];

    private string $classTemplate = <<<EOF
<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\#entity#;

use Swaggest\ShopwareSdk\Entity\EntityDefinitionInterface;
#uses#

final class #entity#Definition implements EntityDefinitionInterface
{
    public function getEntityName(): string
    {
        return '#entity_name#';
    }

    public function getCollectionClass(): string
    {
        return #entity#Collection::class;
    }

    public function getEntityClass(): string
    {
        return #entity#Entity::class;
    }

#defineFields#
}

EOF;

    private string $defineFieldsMethodTemplate = <<<EOF
    public function defineFields(): array
    {
        return [
#fields#
        ];
    }
EOF;

    public function __construct(
        private FieldGenerator $fieldGenerator,
        private AssociationGenerator $associationGenerator
    ) {
    }

    public function generateEntityDefinition(string $entityName, array $entity): string
    {
        $pascalCasedEntityName = $this->snakeToPascalCase($entityName);
        $defineFieldsMethod = \str_replace('#fields#', $this->getDefineFieldsMethodContents($entity), $this->defineFieldsMethodTemplate);

        $output = \str_replace(
            [
                '#entity_name#',
                '#entity#',
                '#uses#',
                '#defineFields#',
            ],
            [
                $entityName,
                $pascalCasedEntityName,
                \implode(";\n", \array_map(fn (string $use) => 'use ' . $use, $this->uses)) . ';',
                $defineFieldsMethod,
            ],
            $this->classTemplate
        );

        $this->uses = [];

        return $output;
    }

    public function addUse(string $class): void
    {
        if (\in_array($class, $this->uses, true)) {
            return;
        }

        $this->uses[] = $class;
    }

    private function getDefineFieldsMethodContents(array $entity): string
    {
        $indentation = '            ';
        $fields = [];

        foreach ($entity as $fieldName => $field) {
            if ('association' === $field['type']) {
                $fields[] = $indentation . $this->associationGenerator->generateAssociation($fieldName, $field);
            } else {
                $fields[] = $indentation . $this->fieldGenerator->generateField($fieldName, $field);
            }
        }

        return \implode(",\n", $fields) . ',';
    }
}
