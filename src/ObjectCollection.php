<?php

declare(strict_types=1);

namespace Lilith\Common;

class ObjectCollection extends AbstractObjectCollection
{
    public function __construct(private readonly string $className, array $collection)
    {
        parent::__construct($collection);
    }

    protected function getClassName(): string
    {
        return $this->className;
    }
}
