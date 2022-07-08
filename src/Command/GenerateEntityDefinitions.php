<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Command;

use Swaggest\ShopwareSdk\Code\CaseConverterTrait;
use Swaggest\ShopwareSdk\Code\EntityDefinition\AssociationGenerator;
use Swaggest\ShopwareSdk\Code\EntityDefinition\EntityDefinitionGenerator;
use Swaggest\ShopwareSdk\Code\EntityDefinition\FieldGenerator;
use Swaggest\ShopwareSdk\Code\EntityDefinition\FlagGenerator;
use Swaggest\ShopwareSdk\Code\EventSubscriber\CodeEventSubscriber;
use Swaggest\ShopwareSdk\Exception\SchemaException;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\EventDispatcher\EventDispatcher;

final class GenerateEntityDefinitions extends Command
{
    use CaseConverterTrait;

    protected static $defaultName = 'shopware-app-sdk:generate-entity-definitions';

    public function execute(InputInterface $input, OutputInterface $output): int
    {
        $schemaPath = __DIR__ . '/../Resources/entity-schema.json';
        $schema = \file_get_contents($schemaPath);

        if (false === $schema) {
            throw new SchemaException('Could not open schema file');
        }

        $json = \json_decode($schema, true);

        $eventDispatcher = new EventDispatcher();

        $flagGenerator = new FlagGenerator($eventDispatcher);
        $fieldGenerator = new FieldGenerator($flagGenerator, $eventDispatcher);
        $associationGenerator = new AssociationGenerator($flagGenerator, $eventDispatcher);
        $entityDefinitionGenerator = new EntityDefinitionGenerator($fieldGenerator, $associationGenerator);

        $eventDispatcher->addSubscriber(new CodeEventSubscriber($entityDefinitionGenerator));

        foreach ($json as $entityName => $entity) {
            $className = $this->snakeToPascalCase($entityName);

            $dirName = __DIR__ . '/../Entity/' . $className;

            if (!\is_dir($dirName)) {
                \mkdir($dirName);
            }

            $filePath = $dirName . '/' . $className . 'Definition.php';

            \file_put_contents($filePath, $entityDefinitionGenerator->generateEntityDefinition($entityName, $entity['properties']));
        }

        $output->writeln('Entity definitions created');

        return 0;
    }
}
