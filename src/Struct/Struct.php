<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Struct;

abstract class Struct implements \JsonSerializable, ExtendableInterface
{
    use AssignArrayTrait;
    use CloneTrait;
    use CreateFromTrait;
    use ExtendableTrait;
    use JsonSerializableTrait;
    use VariablesAccessTrait;

    public function getApiAlias(): string
    {
        $class = static::class;

        $class = explode('\\', $class);
        $class = implode('', $class);

        return ltrim(mb_strtolower(preg_replace('/[A-Z]/', '_$0', $class)), '_');
    }
}
