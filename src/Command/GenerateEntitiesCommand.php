<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Command;

use Swaggest\ShopwareSdk\Code\CaseConverterTrait;
use Swaggest\ShopwareSdk\Code\Entity\CollectionGenerator;
use Swaggest\ShopwareSdk\Code\Entity\EntityGenerator;
use Swaggest\ShopwareSdk\Code\Entity\TypeHintResolver;
use Swaggest\ShopwareSdk\Code\EventSubscriber\CodeEventSubscriber;
use Swaggest\ShopwareSdk\Entity\AbstractEntityDefinition;
use Swaggest\ShopwareSdk\Entity\Category\CategoryDefinition;
use Swaggest\ShopwareSdk\Entity\Product\ProductDefinition;
use Swaggest\ShopwareSdk\Entity\Product\ProductDefinitionAbstract;
use Swaggest\ShopwareSdk\Entity\Salutation\SalutationDefinition;
use Swaggest\ShopwareSdk\Entity\StateMachineState\StateMachineStateDefinition;
use Swaggest\ShopwareSdk\Entity\StateMachineStateTranslation\StateMachineStateTranslationDefinition;
use Swaggest\ShopwareSdk\Exception\SchemaException;
use Swaggest\ShopwareSdk\Schema\EntityDefinition\Processor\CategoryDefinitionProcessor;
use Swaggest\ShopwareSdk\Schema\EntityDefinition\Processor\EntityDefinitionProcessorCollection;
use Swaggest\ShopwareSdk\Schema\EntityDefinition\Processor\ProductDefinitionProcessor;
use Swaggest\ShopwareSdk\Schema\EntityDefinition\Processor\SalutationDefinitionProcessor;
use Swaggest\ShopwareSdk\Schema\EntityDefinition\Processor\StateMachineStateDefinitionProcessor;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\EventDispatcher\EventDispatcher;

final class GenerateEntitiesCommand extends Command
{
    use CaseConverterTrait;

    protected static $defaultName = 'shopware-app-sdk:generate-entities';

    public function execute(InputInterface $input, OutputInterface $output): int
    {
        $schemaPath = __DIR__ . '/../Resources/entity-schema.json';
        $schema = \file_get_contents($schemaPath);

        if (false === $schema) {
            throw new SchemaException('Could not open schema file');
        }

        $json = \json_decode($schema, true);

        $eventDispatcher = new EventDispatcher();

        $typeHintResolver = new TypeHintResolver($eventDispatcher);

        /**
         * If need be, add entity definition processors.
         */
        $processors = new EntityDefinitionProcessorCollection([
        ]);

        $entityGenerator = new EntityGenerator($typeHintResolver, $processors);

        $eventDispatcher->addSubscriber(new CodeEventSubscriber($entityGenerator));

        $collectionGenerator = new CollectionGenerator();

        foreach ($json as $entityName => $entity) {
            $className = $this->snakeToPascalCase($entityName);
            $class = 'Swaggest\\ShopwareSdk\\Entity\\' . $className . '\\' . $className . 'Definition';

            $dirName = __DIR__ . '/../Entity/' . $className;

            if (!\is_dir($dirName)) {
                \mkdir($dirName);
            }

            /** @var AbstractEntityDefinition $definition */
            $definition = new $class();
            $generatedEntity = $entityGenerator->generateEntity($definition);
            $generatedCollection = $collectionGenerator->generateCollection($definition);

            \file_put_contents($dirName . '/' . $className . 'Entity.php', $generatedEntity);
            \file_put_contents($dirName . '/' . $className . 'Collection.php', $generatedCollection);
        }

        $output->writeln('Entities created');

        return 0;
    }
}
