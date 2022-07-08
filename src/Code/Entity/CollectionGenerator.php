<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Code\Entity;

use Swaggest\ShopwareSdk\Code\CaseConverterTrait;
use Swaggest\ShopwareSdk\Entity\EntityDefinitionInterface;

final class CollectionGenerator
{
    use CaseConverterTrait;

    private string $collectionTemplate = <<<EOF
<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\#entity#;

use Swaggest\ShopwareSdk\Entity\EntityCollection;

/**
 * @method void add(#entityClass# \$entity)
 * @method void set(string \$key, #entityClass# \$entity)
 * @method #entityClass#[] getIterator()
 * @method #entityClass#[] getElements()
 * @method #entityClass#|null get(string \$key)
 * @method #entityClass#|null first()
 * @method #entityClass#|null last()
 */
final class #entity#Collection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return #entityClass#::class;
    }
}

EOF;

    public function generateCollection(EntityDefinitionInterface $definition): string
    {
        $entityClass = $definition->getEntityClass();
        $entityClass = explode('\\', $entityClass);
        $entityClass = array_pop($entityClass);

        $entity = $definition->getEntityName();
        $entity = explode('_', $entity);
        $entity = array_map('ucfirst', $entity);
        $entity = implode('', $entity);

        $parameters = [
            '#entityClass#' => $entityClass,
            '#entity#' => $entity,
        ];

        return str_replace(
            array_keys($parameters),
            array_values($parameters),
            $this->collectionTemplate
        );
    }
}
