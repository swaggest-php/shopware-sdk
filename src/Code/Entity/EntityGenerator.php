<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Code\Entity;

use Swaggest\ShopwareSdk\Code\CaseConverterTrait;
use Swaggest\ShopwareSdk\Code\UseAwareCodeGeneratorInterface;
use Swaggest\ShopwareSdk\Entity\EntityDefinitionInterface;
use Swaggest\ShopwareSdk\Schema\Association;
use Swaggest\ShopwareSdk\Schema\Field;
use Swaggest\ShopwareSdk\Schema\Flag\Required;
use function array_map;
use function implode;
use function in_array;
use function ucfirst;

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

class #entity#Entity extends Entity
{
    use EntityIdTrait;

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

    public function __construct(private TypeHintResolver $typeHintResolver)
    {
    }

    public function generateEntity(EntityDefinitionInterface $definition): string
    {
        $properties = [];

        /** @var Field|Association $field */
        foreach ($definition->defineFields() as $field) {
            if ($this->shouldSkip($field->getName())) {
                continue;
            }

            $property = $this->generateProperty($field);

            if (!$property) {
                continue;
            }

            $properties[] = $property;
        }

        $functions = array_column($properties, 'functions');
        $properties = array_column($properties, 'property');

        $entity = $definition->getEntityName();
        $entity = explode('_', $entity);
        $entity = array_map('ucfirst', $entity);
        $entity = implode('', $entity);

        $parameters = [
            '#uses#' => implode(";\n", array_map(fn (string $use) => 'use ' . $use, $this->uses)) . ';',
            '#entity#' => ucfirst($entity),
            '#properties#' => implode("\n\n    ", $properties),
            '#functions#' => implode("\n\n", $functions),
        ];

        $this->uses = [];

        return str_replace(
            array_keys($parameters),
            array_values($parameters),
            $this->classTemplate
        );
    }

    public function addUse(string $class): void
    {
        if (in_array($class, $this->uses, true)) {
            return;
        }

        $this->uses[] = $class;
    }

    private function generateProperty(Field|Association $field): ?array
    {
        $isBoolean = Field::class === $field::class && 'boolean' === $field->getType();
        $isJson = Field::class === $field::class && in_array($field->getType(), ['json_list', 'json_object'], true);

        $nullable = '?';

        if ($field->hasFlag(Required::class) || $isBoolean || $isJson) {
            $nullable = '';
        }

        $type = $this->typeHintResolver->resolve($field);

        $template = str_replace(
            ['#property#', '#type#', '#nullable#'],
            [$field->getName(), $type, $nullable],
            $this->propertyTemplate
        );

        $functions = str_replace(
            ['#propertyUc#', '#propertyLc#', '#nullable#', '#type#'],
            [ucfirst($field->getName()), lcfirst($field->getName()), $nullable, $type],
            $this->accessorsTemplate
        );

        return [
            'property' => trim($template),
            'functions' => $functions,
        ];
    }

    private function shouldSkip(string $fieldName): bool
    {
        return in_array($fieldName, ['id', 'createdAt', 'updatedAt', 'translated', 'versionId'], true);
    }
}
