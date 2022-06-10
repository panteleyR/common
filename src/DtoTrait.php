<?php

declare(strict_types=1);

namespace Lilith\Common;


trait DtoTrait
{
    public function __construct(CollectionInterface|array $data)
    {
        $this->hydrateData($data);
    }

    protected function hydrateData(CollectionInterface|array $data): void
    {
        foreach ($data as $property => $value) {
            if (property_exists($this, $property)) {
                $this->$property = $value;
            }
        }
    }

    public function toArray(): array
    {
        return get_object_vars($this);
    }
}
