<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Struct;

trait JsonSerializableTrait
{
    public function jsonSerialize(): array
    {
        $vars = get_object_vars($this);
        $this->convertDateTimePropertiesToJsonStringRepresentation($vars);

        return $vars;
    }

    protected function convertDateTimePropertiesToJsonStringRepresentation(array &$array): void
    {
        foreach ($array as &$value) {
            if ($value instanceof \DateTimeInterface) {
                $value = $value->format(\DateTime::RFC3339_EXTENDED);
            }
        }
    }
}
