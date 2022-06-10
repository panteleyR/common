<?php

declare(strict_types=1);

namespace Lilith\Common;

class Collection  implements CollectionInterface
{
    protected array $collection = [];

    public function add(mixed $item, int|string|null $key = null): static
    {
        $key !== null ? $this->collection[$key] = $item : $this->collection[] = $item;

        return $this;
    }

    public function addAll(array $items): static
    {
        $this->collection = $items;

        return $this;
    }

    public function get(callable|int|string $key): mixed
    {
        return $this;
    }

    public function filter(callable $func, ?int $mode = null): static
    {

        return $this;
    }

    public function map(callable $func): static
    {

        return $this;
    }

    public function forEach(callable $func): static
    {

        return $this;
    }

    public function values(): array
    {
        // TODO: Implement values() method.
    }

    public function isEmpty(): bool
    {
        // TODO: Implement isEmpty() method.
    }

    public function toArray(): array
    {
        // TODO: Implement toArray() method.
    }

    public function unset(mixed $key): void
    {
        // TODO: Implement unset() method.
    }

    public function clear(): void
    {
    }

    public function __serialize(): array
    {
        // TODO: Implement __serialize() method.
    }

    public function __unserialize(array $data): void
    {
        // TODO: Implement __unserialize() method.
    }
}
